<?php
namespace Payment\SecurityBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('canonical','text', array('label'=>'Nombre de Usuario:', 'required'=>false, 'max_length'=>64));
		$builder->add('plainPassword','repeated',  array('required'=>false, 'max_length'=>64, 'type' => 'password', 'first_name' => 'password', 'second_name' => 'repeat_password', 'invalid_message' => 'La clave no coincide, por favor vuelva a ingresar.'));
		$builder->add('email','repeated',  array( 'required'=>false, 'max_length'=>64, 'first_name' => 'E-mail', 'second_name' => 'Repita_E-mail', 'invalid_message' => 'El E-mail no coincide, por favor vuelva a ingresar.'));
		$builder->add('name','text',  array('label'=>'Nombres:', 'required'=>false, 'max_length'=>64));
		$builder->add('lastname','text',  array('label'=>'Apellidos:', 'required'=>false, 'max_length'=>64));

	}

	public function getName()
	{
		return 'userEdit';
	}
}
