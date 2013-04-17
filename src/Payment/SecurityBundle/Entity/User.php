<?php

namespace Payment\SecurityBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="system_user")
 */
class User extends BaseUser {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=128)
	 * 
	 * @Assert\NotBlank(
	 *     message = "El campo Nombres no puede ser vacio." )
	 *
	 * @Assert\Regex(
	 *     pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/",
	 *     message = "El valor del campo Nombres es incorrecto." )
	 *
	 */
	protected $name;

	/**
	 * @Assert\NotBlank(
	 *     message = "El campo Apellidos no puede ser vacio." )
	 *
	 * @Assert\Regex(
	 *     pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚÑñ]+$/",
	 *     message = "El valor del campo Apellido es incorrecto." )
	 *     
	 * @ORM\Column(type="string", length=128)
	 *
	 */
	protected $lastname;

	/**
	 * @Assert\NotBlank(
	 *     message = "El campo Usuario no puede ser vacio." )
	 *
	 * @Assert\Regex(
	 *     pattern = "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/",
	 *     message = "El valor del campo Usuario es incorrecto." )
	 *
	 */
	protected $canonical;

	/**
	 * @Assert\NotBlank(
	 *     message = "El campo E-mail no puede ser vacio" )
	 *
	 * @Assert\Regex(
	 *     pattern = "/^(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]\.?){0,63}[a-z0-9!#$%&'*+\/=?^_`{|}~-]@(?:(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)*[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\])$/i",
	 *     message = "El valor del campo E-mail es incorrecto." )
	 */
	protected $email;

	/**
	 * @Assert\NotBlank(
	 *     message = "El campo Contraseña no puede ser vacio" )
	 *
	 * @Assert\Length(
	 *     min = "6",
	 *     minMessage="La Contraseña debe tener por lo menos 6 caracteres." )
	 */
	protected $plainPassword;

	public function __construct() {
		parent::__construct();
		// your own logic
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getLastname() {
		return $this->lastname;
	}

	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	public function getRol() {
		$rol = '';
		if (!empty($this->roles[0])) {
			$rol = $this->roles[0];
		}

		return $rol;
	}

	public function setRol($rol) {
		$this->roles = array($rol);
	}

	public function setId($Id) {
		$this->id = $Id;
	}

	public function getCanonical() {
		return $this->canonical;
	}

	public function setCanonical($usernameCanonical) {
		$this->canonical = $usernameCanonical;
	}

}
