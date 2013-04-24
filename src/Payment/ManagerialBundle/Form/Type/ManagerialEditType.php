<?php
namespace Payment\ManagerialBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ManagerialEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('id','hidden');
		$builder->add('name','text',  array('label'=>'Nombre:', 'required'=>false, 'max_length'=>64));
		$builder->add('ruc','text',  array('label'=>'Ruc:', 'required'=>false, 'max_length'=>13));
		$builder->add('startDate','text',  array('label'=>'Fecha Inicio:', 'required'=>false, 'max_length'=>10));
		$builder->add('endDate','text',  array('label'=>'Fecha Fin:', 'required'=>false, 'max_length'=>10));
		$builder->add('isActive','checkbox',  array('label'=>'Activo: ', 'required'=>false,));
	}

	public function getName()
	{
		return 'managerialEdit';
	}
}
