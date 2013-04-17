<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Income
 */
class Income
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Payment\DataAccessBundle\Entity\Consumption
     */
    private $consumption;

    /**
     * @var \Payment\DataAccessBundle\Entity\Fines
     */
    private $fines;

    /**
     * @var \Payment\DataAccessBundle\Entity\IncomeType
     */
    private $incomeType;

    /**
     * @var \Payment\DataAccessBundle\Entity\SystemUser
     */
    private $systemUser;

    /**
     * @var \Payment\DataAccessBundle\Entity\Transaction
     */
    private $transaction;


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
     * Set consumption
     *
     * @param \Payment\DataAccessBundle\Entity\Consumption $consumption
     * @return Income
     */
    public function setConsumption(\Payment\DataAccessBundle\Entity\Consumption $consumption = null)
    {
        $this->consumption = $consumption;
    
        return $this;
    }

    /**
     * Get consumption
     *
     * @return \Payment\DataAccessBundle\Entity\Consumption 
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Set fines
     *
     * @param \Payment\DataAccessBundle\Entity\Fines $fines
     * @return Income
     */
    public function setFines(\Payment\DataAccessBundle\Entity\Fines $fines = null)
    {
        $this->fines = $fines;
    
        return $this;
    }

    /**
     * Get fines
     *
     * @return \Payment\DataAccessBundle\Entity\Fines 
     */
    public function getFines()
    {
        return $this->fines;
    }

    /**
     * Set incomeType
     *
     * @param \Payment\DataAccessBundle\Entity\IncomeType $incomeType
     * @return Income
     */
    public function setIncomeType(\Payment\DataAccessBundle\Entity\IncomeType $incomeType = null)
    {
        $this->incomeType = $incomeType;
    
        return $this;
    }

    /**
     * Get incomeType
     *
     * @return \Payment\DataAccessBundle\Entity\IncomeType 
     */
    public function getIncomeType()
    {
        return $this->incomeType;
    }

    /**
     * Set systemUser
     *
     * @param \Payment\DataAccessBundle\Entity\SystemUser $systemUser
     * @return Income
     */
    public function setSystemUser(\Payment\DataAccessBundle\Entity\SystemUser $systemUser = null)
    {
        $this->systemUser = $systemUser;
    
        return $this;
    }

    /**
     * Get systemUser
     *
     * @return \Payment\DataAccessBundle\Entity\SystemUser 
     */
    public function getSystemUser()
    {
        return $this->systemUser;
    }

    /**
     * Set transaction
     *
     * @param \Payment\DataAccessBundle\Entity\Transaction $transaction
     * @return Income
     */
    public function setTransaction(\Payment\DataAccessBundle\Entity\Transaction $transaction = null)
    {
        $this->transaction = $transaction;
    
        return $this;
    }

    /**
     * Get transaction
     *
     * @return \Payment\DataAccessBundle\Entity\Transaction 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
