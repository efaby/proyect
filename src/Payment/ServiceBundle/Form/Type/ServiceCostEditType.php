<?php
namespace Payment\ServiceBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ServiceCostEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('id','hidden');
		$builder->add('name','text',  array('label'=>'Nombre de servicio:', 'required'=>false, 'max_length'=>64));
		$builder->add('description','textarea',  array('label'=>'Descripción:', 'required'=>false, 'max_length'=>64));
		$builder->add('costValue','text',  array('label'=>'Valor del servicio:', 'required'=>false, 'max_length'=>8));
		$builder->add('isActive','checkbox',  array('label'=>'Activo: ', 'required'=>false,));
	}

	public function getName()
	{
		return 'serviceCostEdit';
	}
}
