<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 */
class Transaction
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $totalValue;

    /**
     * @var \DateTime
     */
    private $systemDate;

    /**
     * @var \Payment\DataAccessBundle\Entity\Managerial
     */
    private $managerial;

    /**
     * @var \Payment\DataAccessBundle\Entity\SystemUser
     */
    private $systemUser;

    /**
     * @var \Payment\DataAccessBundle\Entity\TransactionType
     */
    private $transactionType;


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
     * Set totalValue
     *
     * @param float $totalValue
     * @return Transaction
     */
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;
    
        return $this;
    }

    /**
     * Get totalValue
     *
     * @return float 
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set systemDate
     *
     * @param \DateTime $systemDate
     * @return Transaction
     */
    public function setSystemDate($systemDate)
    {
        $this->systemDate = $systemDate;
    
        return $this;
    }

    /**
     * Get systemDate
     *
     * @return \DateTime 
     */
    public function getSystemDate()
    {
        return $this->systemDate;
    }

    /**
     * Set managerial
     *
     * @param \Payment\DataAccessBundle\Entity\Managerial $managerial
     * @return Transaction
     */
    public function setManagerial(\Payment\DataAccessBundle\Entity\Managerial $managerial = null)
    {
        $this->managerial = $managerial;
    
        return $this;
    }

    /**
     * Get managerial
     *
     * @return \Payment\DataAccessBundle\Entity\Managerial 
     */
    public function getManagerial()
    {
        return $this->managerial;
    }

    /**
     * Set systemUser
     *
     * @param \Payment\DataAccessBundle\Entity\SystemUser $systemUser
     * @return Transaction
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
     * Set transactionType
     *
     * @param \Payment\DataAccessBundle\Entity\TransactionType $transactionType
     * @return Transaction
     */
    public function setTransactionType(\Payment\DataAccessBundle\Entity\TransactionType $transactionType = null)
    {
        $this->transactionType = $transactionType;
    
        return $this;
    }

    /**
     * Get transactionType
     *
     * @return \Payment\DataAccessBundle\Entity\TransactionType 
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
}