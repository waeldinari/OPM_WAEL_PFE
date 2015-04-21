<?php

namespace OPM\PerdiemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CLIENTS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\PerdiemsBundle\Entity\CLIENTSRepository")
 */
class CLIENTS
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
     * @ORM\Column(name="CLIENT_ID", type="integer")
     */
    private $cLIENTID;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_CLIENT", type="string", length=50)
     */
    private $nOMCLIENT;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE_CLIENT", type="string", length=250)
     */
    private $aDRESSECLIENT;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE_CLIENT", type="string", length=50)
     */
    private $vILLECLIENT;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS_CLIENT", type="string", length=50)
     */
    private $pAYSCLIENT;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL1_CLIENT", type="string", length=25)
     */
    private $tEL1CLIENT;


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
     * Set cLIENTID
     *
     * @param integer $cLIENTID
     * @return CLIENTS
     */
    public function setCLIENTID($cLIENTID)
    {
        $this->cLIENTID = $cLIENTID;

        return $this;
    }

    /**
     * Get cLIENTID
     *
     * @return integer 
     */
    public function getCLIENTID()
    {
        return $this->cLIENTID;
    }

    /**
     * Set nOMCLIENT
     *
     * @param string $nOMCLIENT
     * @return CLIENTS
     */
    public function setNOMCLIENT($nOMCLIENT)
    {
        $this->nOMCLIENT = $nOMCLIENT;

        return $this;
    }

    /**
     * Get nOMCLIENT
     *
     * @return string 
     */
    public function getNOMCLIENT()
    {
        return $this->nOMCLIENT;
    }

    /**
     * Set aDRESSECLIENT
     *
     * @param string $aDRESSECLIENT
     * @return CLIENTS
     */
    public function setADRESSECLIENT($aDRESSECLIENT)
    {
        $this->aDRESSECLIENT = $aDRESSECLIENT;

        return $this;
    }

    /**
     * Get aDRESSECLIENT
     *
     * @return string 
     */
    public function getADRESSECLIENT()
    {
        return $this->aDRESSECLIENT;
    }

    /**
     * Set vILLECLIENT
     *
     * @param string $vILLECLIENT
     * @return CLIENTS
     */
    public function setVILLECLIENT($vILLECLIENT)
    {
        $this->vILLECLIENT = $vILLECLIENT;

        return $this;
    }

    /**
     * Get vILLECLIENT
     *
     * @return string 
     */
    public function getVILLECLIENT()
    {
        return $this->vILLECLIENT;
    }

    /**
     * Set pAYSCLIENT
     *
     * @param string $pAYSCLIENT
     * @return CLIENTS
     */
    public function setPAYSCLIENT($pAYSCLIENT)
    {
        $this->pAYSCLIENT = $pAYSCLIENT;

        return $this;
    }

    /**
     * Get pAYSCLIENT
     *
     * @return string 
     */
    public function getPAYSCLIENT()
    {
        return $this->pAYSCLIENT;
    }

    /**
     * Set tEL1CLIENT
     *
     * @param string $tEL1CLIENT
     * @return CLIENTS
     */
    public function setTEL1CLIENT($tEL1CLIENT)
    {
        $this->tEL1CLIENT = $tEL1CLIENT;

        return $this;
    }

    /**
     * Get tEL1CLIENT
     *
     * @return string 
     */
    public function getTEL1CLIENT()
    {
        return $this->tEL1CLIENT;
    }
}
