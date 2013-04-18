<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expenses
 */
class Expenses
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
     * Set description
     *
     * @param string $description
     * @return Expenses
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
     * Set transaction
     *
     * @param \Payment\DataAccessBundle\Entity\Transaction $transaction
     * @return Expenses
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
    /**
     * @var integer
     */
    private $transactionId;

    /**
     * @var \DateTime
     */
    private $systemDate;

    /**
     * @var \DateTime
     */
    private $expenseDate;

    /**
     * @var float
     */
    private $expenseValue;

    /**
     * @var string
     */
    private $expenseName;

    /**
     * @var string
     */
    private $expenseNumber;

    /**
     * @var string
     */
    private $expenseRuc;

    /**
     * @var float
     */
    private $expenseIva;

    /**
     * @var string
     */
    private $expenseAddress;

    /**
     * @var string
     */
    private $expensePhone;


    /**
     * Set transactionId
     *
     * @param integer $transactionId
     * @return Expenses
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return integer 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set systemDate
     *
     * @param \DateTime $systemDate
     * @return Expenses
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
     * Set expenseDate
     *
     * @param \DateTime $expenseDate
     * @return Expenses
     */
    public function setExpenseDate($expenseDate)
    {
        $this->expenseDate = $expenseDate;
    
        return $this;
    }

    /**
     * Get expenseDate
     *
     * @return \DateTime 
     */
    public function getExpenseDate()
    {
        return $this->expenseDate;
    }

    /**
     * Set expenseValue
     *
     * @param float $expenseValue
     * @return Expenses
     */
    public function setExpenseValue($expenseValue)
    {
        $this->expenseValue = $expenseValue;
    
        return $this;
    }

    /**
     * Get expenseValue
     *
     * @return float 
     */
    public function getExpenseValue()
    {
        return $this->expenseValue;
    }

    /**
     * Set expenseName
     *
     * @param string $expenseName
     * @return Expenses
     */
    public function setExpenseName($expenseName)
    {
        $this->expenseName = $expenseName;
    
        return $this;
    }

    /**
     * Get expenseName
     *
     * @return string 
     */
    public function getExpenseName()
    {
        return $this->expenseName;
    }

    /**
     * Set expenseNumber
     *
     * @param string $expenseNumber
     * @return Expenses
     */
    public function setExpenseNumber($expenseNumber)
    {
        $this->expenseNumber = $expenseNumber;
    
        return $this;
    }

    /**
     * Get expenseNumber
     *
     * @return string 
     */
    public function getExpenseNumber()
    {
        return $this->expenseNumber;
    }

    /**
     * Set expenseRuc
     *
     * @param string $expenseRuc
     * @return Expenses
     */
    public function setExpenseRuc($expenseRuc)
    {
        $this->expenseRuc = $expenseRuc;
    
        return $this;
    }

    /**
     * Get expenseRuc
     *
     * @return string 
     */
    public function getExpenseRuc()
    {
        return $this->expenseRuc;
    }

    /**
     * Set expenseIva
     *
     * @param float $expenseIva
     * @return Expenses
     */
    public function setExpenseIva($expenseIva)
    {
        $this->expenseIva = $expenseIva;
    
        return $this;
    }

    /**
     * Get expenseIva
     *
     * @return float 
     */
    public function getExpenseIva()
    {
        return $this->expenseIva;
    }

    /**
     * Set expenseAddress
     *
     * @param string $expenseAddress
     * @return Expenses
     */
    public function setExpenseAddress($expenseAddress)
    {
        $this->expenseAddress = $expenseAddress;
    
        return $this;
    }

    /**
     * Get expenseAddress
     *
     * @return string 
     */
    public function getExpenseAddress()
    {
        return $this->expenseAddress;
    }

    /**
     * Set expensePhone
     *
     * @param string $expensePhone
     * @return Expenses
     */
    public function setExpensePhone($expensePhone)
    {
        $this->expensePhone = $expensePhone;
    
        return $this;
    }

    /**
     * Get expensePhone
     *
     * @return string 
     */
    public function getExpensePhone()
    {
        return $this->expensePhone;
    }
}