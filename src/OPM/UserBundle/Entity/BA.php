<?php

namespace OPM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BA
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\UserBundle\Entity\BARepository")
 */
class BA
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
     * @var integer
     *
     * @ORM\Column(name="ba_id", type="integer")
     */
    private $baId;
    
    
    
    
   
    /**
     * @ORM\OneToMany(targetEntity="OPM\UserBundle\Entity\User",mappedBy="BA")
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
     * @ORM\OneToMany(targetEntity="OPM\UserBundle\Entity\BU",mappedBy="BA")
     * @ORM\JoinColumn(nullable=true)
     */
    private $BU;
    
    
    
    public function getBU() {
        return $this->BU;
    }

    public function setBA($BU) {
        $this->BU = $BU;
    }

    
    
     /**
     * @ORM\OneToMany(targetEntity="OPM\UserBundle\Entity\UserCentres",mappedBy="BA")
     * @ORM\JoinColumn(nullable=true)
     */
    private $UserCentres;
    public function getUserCentres() {
        return $this->UserCentres;
    }

    public function setUserCentres($UserCentres) {
        $this->UserCentres = $UserCentres;
    }

            
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=8)
     */
    private $abreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="directeur_id", type="string", length=30)
     */
    private $directeurId;


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
     * Set baId
     *
     * @param integer $baId
     * @return BA
     */
    public function setBaId($baId)
    {
        $this->baId = $baId;

        return $this;
    }

    /**
     * Get baId
     *
     * @return integer 
     */
    public function getBaId()
    {
        return $this->baId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BA
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
     * Set abreviation
     *
     * @param string $abreviation
     * @return BA
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set directeurId
     *
     * @param string $directeurId
     * @return BA
     */
    public function setDirecteurId($directeurId)
    {
        $this->directeurId = $directeurId;

        return $this;
    }

    /**
     * Get directeurId
     *
     * @return string 
     */
    public function getDirecteurId()
    {
        return $this->directeurId;
    }
}
