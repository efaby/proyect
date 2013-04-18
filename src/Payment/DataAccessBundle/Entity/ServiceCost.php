<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $description;

    /**
     * @var float
     */
    private $costValue;

    /**
     * @var string
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
}