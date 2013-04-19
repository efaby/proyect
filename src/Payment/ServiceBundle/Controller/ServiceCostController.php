<?php
namespace Payment\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Payment\ApplicationBundle\Libraries\Paginator\Paginator;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Payment\ServiceBundle\Form\Type\ServiceCostSearchType;
use  Payment\ServiceBundle\Entity\ServiceCostSearch;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Payment\DataAccessBundle\Entity\FinesType;
use Payment\FinesBundle\Form\Type\FinesTypeEditType;

class ServiceCostController extends Controller
{
	const LIMIT_PAGINATOR = 10;
	
	/**
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listServiceCostAction(Request $request)
	{
		$serviceCostEntity = new ServiceCostSearch();
		$limit = self::LIMIT_PAGINATOR;
		$offset = 0;
		$serviceCostText = null;
	
		$serviceCostForm = $this->createForm(new ServiceCostSearchType(), $serviceCostEntity);
		if ($request->getMethod() == 'POST') {
			$serviceCostForm->bind($request);
			$datas = $serviceCostForm->getData();
			if ($serviceCostForm->isValid()) {
				$serviceCostText = $datas->getName();
				$offset = $datas->getOffset();
				$limit = $datas->getLimit();
			}
		}
		$offsetItem = $offset;
		if ($offsetItem > 0) {
			$offsetItem = $offsetItem - 1;
		}
		$offsetItem = $offsetItem * $limit;
		$total = $this->getDoctrine()->getManager()->getRepository('PaymentDataAccessBundle:ServiceCost')->findServiceCostByNameToList($serviceCostText, $offsetItem, $limit);
		$total = $total[0][1];
		$serviceCost = $this->getDoctrine()->getManager()->getRepository('PaymentDataAccessBundle:ServiceCost')->findServiceCostByNameToList($serviceCostText, $offsetItem, $limit, false);
		$paginator = new Paginator($serviceCostForm->getName(), $total, $offset, $limit);
	
		return array('form' => $serviceCostForm->createView(), 'limit' => $limit, 'total' => $total, 'serviceCost' => $serviceCost, 'paginator' => $paginator);
	}
	
	/**
	 * Secure(roles="ROLE_ADMIN")
	 */
	public function deleteServiceCostAction(Request $request)
	{
		return $this->actionToServiceCost($request,false);
	}
	
	/**
	 * Secure(roles="ROLE_ADMIN")
	 */
	public function activeServiceCostAction(Request $request)
	{
		return $this->actionToServiceCost($request);
	}
	
	/**
	 * @Template()
	 * Secure(roles="ROLE_ADMIN")
	 */
	public function editServiceCostAction(Request $request)
	{
		$title = "Editar";
		$finesTypeId = $request->request->get('cid', 0);
		if (is_array($finesTypeId)) {
			$finesTypeId = $finesTypeId[0];
		}
		 
		$em = $this->getDoctrine()->getManager();
		$finesType = $em->getRepository('PaymentDataAccessBundle:FinesType')->find($finesTypeId);
		if (!$finesType) {
			$finesType = new FinesType();
			$title = "Crear";
		}
		 
		$finesTypeForm = $this->createForm(new FinesTypeEditType(), $finesType);
		 
		if ($request->getMethod() == 'POST') {
			$band = $request->request->get('band', 0);
			if ($band != 0)
			{
				$finesTypeForm->bind($request);
				if ($finesTypeForm->isValid())
				{
					$em->persist($finesType);
					$em->flush();
					$this->get('session')->getFlashBag()->add('message', 'El Item ha sido almacenado &eacute;xitosamente.');
	
					return $this->redirect($this->generateUrl('_listFinesType'));
				}
			}
		}
		return array('form' => $finesTypeForm->createView(), 'title' => $title);
	}
	
	private function actionToServiceCost(Request $request, $active = true)
	{
		$serviceCostId = $request->request->get('cid', 0);
		if (is_array($serviceCostId)) {
			$serviceCostId = $serviceCostId[0];
		}
		 
		$em = $this->getDoctrine()->getManager();
		$serviceCost = $em->getRepository('PaymentDataAccessBundle:ServiceCost')->find($serviceCostId);
	
		if (!$serviceCost) {
			$message = "El item seleccionado no ha podido ser encontrado.";
		} else {
			if ($active)
			{
				$publish = $request->request->get('publish');
				$serviceCost->setIsActive($publish);
				$em->flush();
				if ($publish == 1) {
					$message = "El item ha sido Activado &eacute;xitosamente.";
				} else {
					$message = "El item ha sido Desactivado &eacute;xitosamente.";
				}
			} else {
				$em->remove($serviceCost);
				$em->flush();
				$message = "El item ha sido Eliminado &eacute;xitosamente.";
			}
		}
	
		$this->get('session')->getFlashBag()->add('message', $message);
		return $this->redirect($this->generateUrl('_listServiceCost'));
	}
}
