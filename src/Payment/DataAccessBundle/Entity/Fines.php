<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fines
 */
class Fines
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var \DateTime
     */
    private $fineDate;

    /**
     * @var \Payment\DataAccessBundle\Entity\FinesType
     */
    private $finesType;

    /**
     * @var \Payment\DataAccessBundle\Entity\Member
     */
    private $member;

    /**
     * @var \Payment\DataAccessBundle\Entity\SystemUser
     */
    private $systemUser;


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
     * Set cost
     *
     * @param float $cost
     * @return Fines
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
     * Set fineDate
     *
     * @param \DateTime $fineDate
     * @return Fines
     */
    public function setFineDate($fineDate)
    {
        $this->fineDate = $fineDate;
    
        return $this;
    }

    /**
     * Get fineDate
     *
     * @return \DateTime 
     */
    public function getFineDate()
    {
        return $this->fineDate;
    }

    /**
     * Set finesType
     *
     * @param \Payment\DataAccessBundle\Entity\FinesType $finesType
     * @return Fines
     */
    public function setFinesType(\Payment\DataAccessBundle\Entity\FinesType $finesType = null)
    {
        $this->finesType = $finesType;
    
        return $this;
    }

    /**
     * Get finesType
     *
     * @return \Payment\DataAccessBundle\Entity\FinesType 
     */
    public function getFinesType()
    {
        return $this->finesType;
    }

    /**
     * Set member
     *
     * @param \Payment\DataAccessBundle\Entity\Member $member
     * @return Fines
     */
    public function setMember(\Payment\DataAccessBundle\Entity\Member $member = null)
    {
        $this->member = $member;
    
        return $this;
    }

    /**
     * Get member
     *
     * @return \Payment\DataAccessBundle\Entity\Member 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set systemUser
     *
     * @param \Payment\DataAccessBundle\Entity\SystemUser $systemUser
     * @return Fines
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
}