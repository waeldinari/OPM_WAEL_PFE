<?php

namespace OPM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BU
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\UserBundle\Entity\BURepository")
 */
class BU
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
     * @ORM\Column(name="bu_id", type="integer")
     */
    private $buId;
    
    
     /**
     * @ORM\ManyToOne(targetEntity="BA")
     */
    private $BA;
    
    public function getBA() {
        return $this->BA;
    }

    public function setBU($BA) {
        $this->BA = $BA;
    }
    
    
     /**
     * @ORM\OneToMany(targetEntity="OPM\UserBundle\Entity\UserCentres",mappedBy="BU")
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
     * @var integer
     *
     * @ORM\Column(name="TJM", type="integer")
     */
    private $tJM;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRM", type="integer")
     */
    private $pRM;

    /**
     * @var string
     *
     * @ORM\Column(name="directeur_id", type="string", length=30)
     */
    private $directeurId;

    /**
     * @var string
     *
     * @ORM\Column(name="delegue_id", type="string", length=30)
     */
    private $delegueId;


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
     * Set buId
     *
     * @param integer $buId
     * @return BU
     */
    public function setBuId($buId)
    {
        $this->buId = $buId;

        return $this;
    }

    /**
     * Get buId
     *
     * @return integer 
     */
    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BU
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
     * @return BU
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
     * Set tJM
     *
     * @param integer $tJM
     * @return BU
     */
    public function setTJM($tJM)
    {
        $this->tJM = $tJM;

        return $this;
    }

    /**
     * Get tJM
     *
     * @return integer 
     */
    public function getTJM()
    {
        return $this->tJM;
    }

    /**
     * Set pRM
     *
     * @param integer $pRM
     * @return BU
     */
    public function setPRM($pRM)
    {
        $this->pRM = $pRM;

        return $this;
    }

    /**
     * Get pRM
     *
     * @return integer 
     */
    public function getPRM()
    {
        return $this->pRM;
    }

    /**
     * Set directeurId
     *
     * @param string $directeurId
     * @return BU
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

    /**
     * Set delegueId
     *
     * @param string $delegueId
     * @return BU
     */
    public function setDelegueId($delegueId)
    {
        $this->delegueId = $delegueId;

        return $this;
    }

    /**
     * Get delegueId
     *
     * @return string 
     */
    public function getDelegueId()
    {
        return $this->delegueId;
    }
}
