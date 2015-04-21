<?php

namespace OPM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_Centres
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\UserBundle\Entity\UserCentresRepository")
 */
class UserCentres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    
    
     
    /**
     * @ORM\OneToMany(targetEntity="OPM\UserBundle\Entity\User",mappedBy="UserCentres")
     * @ORM\JoinColumn(nullable=true)
     */
    private $User;
    
    
    public function getUser() {
        return $this->User;
    }

    public function setUser($User) {
        $this->User = $User;
    }

    
    /**
     * @ORM\ManyToOne(targetEntity="BA")
     */
    private $BA;
    public function getBA() {
        return $this->BA;
    }

    public function setBA($BA) {
        $this->BA = $BA;
    }

    
    
     /**
     * @ORM\ManyToOne(targetEntity="BU")
     */
    private $BU;
    public function getBU() {
        return $this->BU;
    }

    public function setBU($BU) {
        $this->BU = $BU;
    }

        
    
    /**
     * @var integer
     *
     * @ORM\Column(name="centre_id", type="integer")
     */
    private $centreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


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
     * Set centreId
     *
     * @param integer $centreId
     * @return UserCentres
     */
    public function setCentreId($centreId)
    {
        $this->centreId = $centreId;

        return $this;
    }

    /**
     * Get centreId
     *
     * @return integer 
     */
    public function getCentreId()
    {
        return $this->centreId;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return UserCentres
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}
