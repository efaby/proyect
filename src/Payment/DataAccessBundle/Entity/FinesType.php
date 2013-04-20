<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * FinesType
 */
class FinesType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * 
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
     *   message = "Por favor ingrese el costo de la multa."
     * )
     * @Assert\Regex(
     *     pattern = "/^(-)?\d+(\.\d\d)?$/",
     *     message = "El Valor es incorrecto."
     * )
     */
    private $cost;


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
     * Set name
     *
     * @param string $name
     * @return FinesType
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
     * Set description
     *
     * @param string $description
     * @return FinesType
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
     * Set cost
     *
     * @param float $cost
     * @return FinesType
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    
        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }
    /**
     * @var boolean
     */
    private $isActive;


    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return FinesType
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