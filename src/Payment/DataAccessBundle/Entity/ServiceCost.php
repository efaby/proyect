<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceCost
 */
class ServiceCost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern = "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/",
     *     message = "Valor de descripción es incorrecto."
     * )
     */
    private $description;

    /**
     * @var float
     * @Assert\NotBlank(
     *   message = "Por favor ingrese el costo del servicio."
     * )
     * @Assert\Regex(
     *     pattern = "/^(-)?\d+(\.\d\d)?$/",
     *     message = "El Valor es incorrecto."
     * )
     */
    private $costValue;

    /**
     * @var string
     * @Assert\NotBlank(
     *   message = "Por favor ingrese el nombre."
     * )
     * 
     * @Assert\Regex(
     *     pattern = "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s\_\-\.\@\/]+$/",
     *     message = "Valor de nombre es incorrecto."
     * )
     */
    
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ServiceCost
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set costValue
     *
     * @param float $costValue
     * @return ServiceCost
     */
    public function setCostValue($costValue)
    {
        $this->costValue = $costValue;
    
        return $this;
    }

    /**
     * Get costValue
     *
     * @return float 
     */
    public function getCostValue()
    {
        return $this->costValue;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ServiceCost
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var boolean
     */
    private $isActive;


    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return ServiceCost
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    public function setId($id)
    {
    	$this->id = $id;
    }
}