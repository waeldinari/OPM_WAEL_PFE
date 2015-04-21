<?php

namespace OPM\PerdiemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PERDIEMS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\PerdiemsBundle\Entity\PERDIEMSRepository")
 */
class PERDIEMS
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
     * @ORM\Column(name="PERDIEMS_ID", type="integer")
     */
    private $pERDIEMSID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date")
     */
    private $dATECREATION;

    /**
     * @var integer
     *
     * @ORM\Column(name="FACT_CLIENT", type="integer")
     */
    private $fACTCLIENT;

    /**
     * @var integer
     *
     * @ORM\Column(name="NON_FACT", type="integer")
     */
    private $nONFACT;

    /**
     * @var integer
     *
     * @ORM\Column(name="FORFAIT_CLIENT", type="integer")
     */
    private $fORFAITCLIENT;

    /**
     * @var integer
     *
     * @ORM\Column(name="INTERNE", type="integer")
     */
    private $iNTERNE;

    /**
     * @var string
     *
     * @ORM\Column(name="CREE_PAR", type="string", length=30)
     */
    private $cREEPAR;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGER", type="string", length=50)
     */
    private $mANAGER;

    /**
     * @var integer
     *
     * @ORM\Column(name="SOCIETE_SIGNATAIRE", type="integer")
     */
    private $sOCIETESIGNATAIRE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEPART", type="date")
     */
    private $dATEDEPART;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_RETOUR", type="date")
     */
    private $dATERETOUR;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255)
     */
    private $dESCRIPTION;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_SERVI", type="integer")
     */
    private $mONTANTSERVI;

   
    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_FACTURE", type="integer")
     */
    private $mONTANTFACTURE;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRE_JOUR_FACTURABLE", type="integer")
     */
    private $nBREJOURFACTURABLE;

    /**
     * @var string
     *
     * @ORM\Column(name="DESC_MONTANT", type="string", length=50)
     */
    private $dESCMONTANT;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRE_JOURS", type="integer")
     */
    private $nBREJOURS;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRE_JOURS_FACTURE", type="integer")
     */
    private $nBREJOURSFACTURE;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOT_A_SERVIR", type="integer")
     */
    private $tOTASERVIR;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOT_SERVI", type="integer")
     */
    private $tOTSERVI;

    /**
     * @var string
     *
     * @ORM\Column(name="NUM_CIN", type="string", length=32)
     */
    private $nUMCIN;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EMISSION_CIN", type="date")
     */
    private $dATEEMISSIONCIN;

    /**
     * @var string
     *
     * @ORM\Column(name="NUM_PASSEPORT", type="string", length=32)
     */
    private $nUMPASSEPORT;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EMISSION_PASSEPORT", type="date")
     */
    private $dATEEMISSIONPASSEPORT;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATION", type="string", length=50)
     */
    private $dESTINATION;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTAIRE", type="string", length=255)
     */
    private $cOMMENTAIRE;

    /**
     * @var integer
     *
     * @ORM\Column(name="SANS_FRAIS_TIMBRE", type="integer")
     */
    private $sANSFRAISTIMBRE;

    /**
     * @var integer
     *
     * @ORM\Column(name="PASSEPORTETRANGER", type="integer")
     */
    private $pASSEPORTETRANGER;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESCALEMAGHREB", type="integer")
     */
    private $eSCALEMAGHREB;

    /**
     * @var integer
     *
     * @ORM\Column(name="BECAUSE_ESCALEDESTINATION", type="integer")
     */
    private $bECAUSEESCALEDESTINATION;

    /**
     * @var integer
     *
     * @ORM\Column(name="BECAUSE_PASSEPROTETRANGER", type="integer")
     */
    private $bECAUSEPASSEPROTETRANGER;

    /**
     * @var integer
     *
     * @ORM\Column(name="BECAUSE_CARTESEJOUR", type="integer")
     */
    private $bECAUSECARTESEJOUR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ASSURANCE_VOYAGE", type="date")
     */
    private $dATEASSURANCEVOYAGE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EXPIRATION_PASSEPORT", type="date")
     */
    private $dATEEXPIRATIONPASSEPORT;


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
     * Set pERDIEMSID
     *
     * @param integer $pERDIEMSID
     * @return PERDIEMS
     */
    public function setPERDIEMSID($pERDIEMSID)
    {
        $this->pERDIEMSID = $pERDIEMSID;

        return $this;
    }

    /**
     * Get pERDIEMSID
     *
     * @return integer 
     */
    public function getPERDIEMSID()
    {
        return $this->pERDIEMSID;
    }

    /**
     * Set dATECREATION
     *
     * @param \DateTime $dATECREATION
     * @return PERDIEMS
     */
    public function setDATECREATION($dATECREATION)
    {
        $this->dATECREATION = $dATECREATION;

        return $this;
    }

    /**
     * Get dATECREATION
     *
     * @return \DateTime 
     */
    public function getDATECREATION()
    {
        return $this->dATECREATION;
    }

    /**
     * Set fACTCLIENT
     *
     * @param integer $fACTCLIENT
     * @return PERDIEMS
     */
    public function setFACTCLIENT($fACTCLIENT)
    {
        $this->fACTCLIENT = $fACTCLIENT;

        return $this;
    }

    /**
     * Get fACTCLIENT
     *
     * @return integer 
     */
    public function getFACTCLIENT()
    {
        return $this->fACTCLIENT;
    }

    /**
     * Set nONFACT
     *
     * @param integer $nONFACT
     * @return PERDIEMS
     */
    public function setNONFACT($nONFACT)
    {
        $this->nONFACT = $nONFACT;

        return $this;
    }

    /**
     * Get nONFACT
     *
     * @return integer 
     */
    public function getNONFACT()
    {
        return $this->nONFACT;
    }

    /**
     * Set fORFAITCLIENT
     *
     * @param integer $fORFAITCLIENT
     * @return PERDIEMS
     */
    public function setFORFAITCLIENT($fORFAITCLIENT)
    {
        $this->fORFAITCLIENT = $fORFAITCLIENT;

        return $this;
    }

    /**
     * Get fORFAITCLIENT
     *
     * @return integer 
     */
    public function getFORFAITCLIENT()
    {
        return $this->fORFAITCLIENT;
    }

    /**
     * Set iNTERNE
     *
     * @param integer $iNTERNE
     * @return PERDIEMS
     */
    public function setINTERNE($iNTERNE)
    {
        $this->iNTERNE = $iNTERNE;

        return $this;
    }

    /**
     * Get iNTERNE
     *
     * @return integer 
     */
    public function getINTERNE()
    {
        return $this->iNTERNE;
    }

    /**
     * Set cREEPAR
     *
     * @param string $cREEPAR
     * @return PERDIEMS
     */
    public function setCREEPAR($cREEPAR)
    {
        $this->cREEPAR = $cREEPAR;

        return $this;
    }

    /**
     * Get cREEPAR
     *
     * @return string 
     */
    public function getCREEPAR()
    {
        return $this->cREEPAR;
    }

    /**
     * Set mANAGER
     *
     * @param string $mANAGER
     * @return PERDIEMS
     */
    public function setMANAGER($mANAGER)
    {
        $this->mANAGER = $mANAGER;

        return $this;
    }

    /**
     * Get mANAGER
     *
     * @return string 
     */
    public function getMANAGER()
    {
        return $this->mANAGER;
    }

    /**
     * Set sOCIETESIGNATAIRE
     *
     * @param integer $sOCIETESIGNATAIRE
     * @return PERDIEMS
     */
    public function setSOCIETESIGNATAIRE($sOCIETESIGNATAIRE)
    {
        $this->sOCIETESIGNATAIRE = $sOCIETESIGNATAIRE;

        return $this;
    }

    /**
     * Get sOCIETESIGNATAIRE
     *
     * @return integer 
     */
    public function getSOCIETESIGNATAIRE()
    {
        return $this->sOCIETESIGNATAIRE;
    }

    /**
     * Set dATEDEPART
     *
     * @param \DateTime $dATEDEPART
     * @return PERDIEMS
     */
    public function setDATEDEPART($dATEDEPART)
    {
        $this->dATEDEPART = $dATEDEPART;

        return $this;
    }

    /**
     * Get dATEDEPART
     *
     * @return \DateTime 
     */
    public function getDATEDEPART()
    {
        return $this->dATEDEPART;
    }

    /**
     * Set dATERETOUR
     *
     * @param \DateTime $dATERETOUR
     * @return PERDIEMS
     */
    public function setDATERETOUR($dATERETOUR)
    {
        $this->dATERETOUR = $dATERETOUR;

        return $this;
    }

    /**
     * Get dATERETOUR
     *
     * @return \DateTime 
     */
    public function getDATERETOUR()
    {
        return $this->dATERETOUR;
    }

    /**
     * Set dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return PERDIEMS
     */
    public function setDESCRIPTION($dESCRIPTION)
    {
        $this->dESCRIPTION = $dESCRIPTION;

        return $this;
    }

    /**
     * Get dESCRIPTION
     *
     * @return string 
     */
    public function getDESCRIPTION()
    {
        return $this->dESCRIPTION;
    }

    /**
     * Set mONTANTSERVI
     *
     * @param integer $mONTANTSERVI
     * @return PERDIEMS
     */
    public function setMONTANTSERVI($mONTANTSERVI)
    {
        $this->mONTANTSERVI = $mONTANTSERVI;

        return $this;
    }

    /**
     * Get mONTANTSERVI
     *
     * @return integer 
     */
    public function getMONTANTSERVI()
    {
        return $this->mONTANTSERVI;
    }

    /**
     * Set mONTANTFACTURE
     *
     * @param integer $mONTANTFACTURE
     * @return PERDIEMS
     */
    public function setMONTANTFACTURE($mONTANTFACTURE)
    {
        $this->mONTANTFACTURE = $mONTANTFACTURE;

        return $this;
    }

    /**
     * Get mONTANTFACTURE
     *
     * @return integer 
     */
    public function getMONTANTFACTURE()
    {
        return $this->mONTANTFACTURE;
    }

    /**
     * Set nBREJOURFACTURABLE
     *
     * @param integer $nBREJOURFACTURABLE
     * @return PERDIEMS
     */
    public function setNBREJOURFACTURABLE($nBREJOURFACTURABLE)
    {
        $this->nBREJOURFACTURABLE = $nBREJOURFACTURABLE;

        return $this;
    }

    /**
     * Get nBREJOURFACTURABLE
     *
     * @return integer 
     */
    public function getNBREJOURFACTURABLE()
    {
        return $this->nBREJOURFACTURABLE;
    }

    /**
     * Set dESCMONTANT
     *
     * @param string $dESCMONTANT
     * @return PERDIEMS
     */
    public function setDESCMONTANT($dESCMONTANT)
    {
        $this->dESCMONTANT = $dESCMONTANT;

        return $this;
    }

    /**
     * Get dESCMONTANT
     *
     * @return string 
     */
    public function getDESCMONTANT()
    {
        return $this->dESCMONTANT;
    }

    /**
     * Set nBREJOURS
     *
     * @param integer $nBREJOURS
     * @return PERDIEMS
     */
    public function setNBREJOURS($nBREJOURS)
    {
        $this->nBREJOURS = $nBREJOURS;

        return $this;
    }

    /**
     * Get nBREJOURS
     *
     * @return integer 
     */
    public function getNBREJOURS()
    {
        return $this->nBREJOURS;
    }

    /**
     * Set nBREJOURSFACTURE
     *
     * @param integer $nBREJOURSFACTURE
     * @return PERDIEMS
     */
    public function setNBREJOURSFACTURE($nBREJOURSFACTURE)
    {
        $this->nBREJOURSFACTURE = $nBREJOURSFACTURE;

        return $this;
    }

    /**
     * Get nBREJOURSFACTURE
     *
     * @return integer 
     */
    public function getNBREJOURSFACTURE()
    {
        return $this->nBREJOURSFACTURE;
    }

    /**
     * Set tOTASERVIR
     *
     * @param integer $tOTASERVIR
     * @return PERDIEMS
     */
    public function setTOTASERVIR($tOTASERVIR)
    {
        $this->tOTASERVIR = $tOTASERVIR;

        return $this;
    }

    /**
     * Get tOTASERVIR
     *
     * @return integer 
     */
    public function getTOTASERVIR()
    {
        return $this->tOTASERVIR;
    }

    /**
     * Set tOTSERVI
     *
     * @param integer $tOTSERVI
     * @return PERDIEMS
     */
    public function setTOTSERVI($tOTSERVI)
    {
        $this->tOTSERVI = $tOTSERVI;

        return $this;
    }

    /**
     * Get tOTSERVI
     *
     * @return integer 
     */
    public function getTOTSERVI()
    {
        return $this->tOTSERVI;
    }

    /**
     * Set nUMCIN
     *
     * @param string $nUMCIN
     * @return PERDIEMS
     */
    public function setNUMCIN($nUMCIN)
    {
        $this->nUMCIN = $nUMCIN;

        return $this;
    }

    /**
     * Get nUMCIN
     *
     * @return string 
     */
    public function getNUMCIN()
    {
        return $this->nUMCIN;
    }

    /**
     * Set dATEEMISSIONCIN
     *
     * @param \DateTime $dATEEMISSIONCIN
     * @return PERDIEMS
     */
    public function setDATEEMISSIONCIN($dATEEMISSIONCIN)
    {
        $this->dATEEMISSIONCIN = $dATEEMISSIONCIN;

        return $this;
    }

    /**
     * Get dATEEMISSIONCIN
     *
     * @return \DateTime 
     */
    public function getDATEEMISSIONCIN()
    {
        return $this->dATEEMISSIONCIN;
    }

    /**
     * Set nUMPASSEPORT
     *
     * @param string $nUMPASSEPORT
     * @return PERDIEMS
     */
    public function setNUMPASSEPORT($nUMPASSEPORT)
    {
        $this->nUMPASSEPORT = $nUMPASSEPORT;

        return $this;
    }

    /**
     * Get nUMPASSEPORT
     *
     * @return string 
     */
    public function getNUMPASSEPORT()
    {
        return $this->nUMPASSEPORT;
    }

    /**
     * Set dATEEMISSIONPASSEPORT
     *
     * @param \DateTime $dATEEMISSIONPASSEPORT
     * @return PERDIEMS
     */
    public function setDATEEMISSIONPASSEPORT($dATEEMISSIONPASSEPORT)
    {
        $this->dATEEMISSIONPASSEPORT = $dATEEMISSIONPASSEPORT;

        return $this;
    }

    /**
     * Get dATEEMISSIONPASSEPORT
     *
     * @return \DateTime 
     */
    public function getDATEEMISSIONPASSEPORT()
    {
        return $this->dATEEMISSIONPASSEPORT;
    }

    /**
     * Set dESTINATION
     *
     * @param string $dESTINATION
     * @return PERDIEMS
     */
    public function setDESTINATION($dESTINATION)
    {
        $this->dESTINATION = $dESTINATION;

        return $this;
    }

    /**
     * Get dESTINATION
     *
     * @return string 
     */
    public function getDESTINATION()
    {
        return $this->dESTINATION;
    }

    /**
     * Set cOMMENTAIRE
     *
     * @param string $cOMMENTAIRE
     * @return PERDIEMS
     */
    public function setCOMMENTAIRE($cOMMENTAIRE)
    {
        $this->cOMMENTAIRE = $cOMMENTAIRE;

        return $this;
    }

    /**
     * Get cOMMENTAIRE
     *
     * @return string 
     */
    public function getCOMMENTAIRE()
    {
        return $this->cOMMENTAIRE;
    }

    /**
     * Set sANSFRAISTIMBRE
     *
     * @param integer $sANSFRAISTIMBRE
     * @return PERDIEMS
     */
    public function setSANSFRAISTIMBRE($sANSFRAISTIMBRE)
    {
        $this->sANSFRAISTIMBRE = $sANSFRAISTIMBRE;

        return $this;
    }

    /**
     * Get sANSFRAISTIMBRE
     *
     * @return integer 
     */
    public function getSANSFRAISTIMBRE()
    {
        return $this->sANSFRAISTIMBRE;
    }

    /**
     * Set pASSEPORTETRANGER
     *
     * @param integer $pASSEPORTETRANGER
     * @return PERDIEMS
     */
    public function setPASSEPORTETRANGER($pASSEPORTETRANGER)
    {
        $this->pASSEPORTETRANGER = $pASSEPORTETRANGER;

        return $this;
    }

    /**
     * Get pASSEPORTETRANGER
     *
     * @return integer 
     */
    public function getPASSEPORTETRANGER()
    {
        return $this->pASSEPORTETRANGER;
    }

    /**
     * Set eSCALEMAGHREB
     *
     * @param integer $eSCALEMAGHREB
     * @return PERDIEMS
     */
    public function setESCALEMAGHREB($eSCALEMAGHREB)
    {
        $this->eSCALEMAGHREB = $eSCALEMAGHREB;

        return $this;
    }

    /**
     * Get eSCALEMAGHREB
     *
     * @return integer 
     */
    public function getESCALEMAGHREB()
    {
        return $this->eSCALEMAGHREB;
    }

    /**
     * Set bECAUSEESCALEDESTINATION
     *
     * @param integer $bECAUSEESCALEDESTINATION
     * @return PERDIEMS
     */
    public function setBECAUSEESCALEDESTINATION($bECAUSEESCALEDESTINATION)
    {
        $this->bECAUSEESCALEDESTINATION = $bECAUSEESCALEDESTINATION;

        return $this;
    }

    /**
     * Get bECAUSEESCALEDESTINATION
     *
     * @return integer 
     */
    public function getBECAUSEESCALEDESTINATION()
    {
        return $this->bECAUSEESCALEDESTINATION;
    }

    /**
     * Set bECAUSEPASSEPROTETRANGER
     *
     * @param integer $bECAUSEPASSEPROTETRANGER
     * @return PERDIEMS
     */
    public function setBECAUSEPASSEPROTETRANGER($bECAUSEPASSEPROTETRANGER)
    {
        $this->bECAUSEPASSEPROTETRANGER = $bECAUSEPASSEPROTETRANGER;

        return $this;
    }

    /**
     * Get bECAUSEPASSEPROTETRANGER
     *
     * @return integer 
     */
    public function getBECAUSEPASSEPROTETRANGER()
    {
        return $this->bECAUSEPASSEPROTETRANGER;
    }

    /**
     * Set bECAUSECARTESEJOUR
     *
     * @param integer $bECAUSECARTESEJOUR
     * @return PERDIEMS
     */
    public function setBECAUSECARTESEJOUR($bECAUSECARTESEJOUR)
    {
        $this->bECAUSECARTESEJOUR = $bECAUSECARTESEJOUR;

        return $this;
    }

    /**
     * Get bECAUSECARTESEJOUR
     *
     * @return integer 
     */
    public function getBECAUSECARTESEJOUR()
    {
        return $this->bECAUSECARTESEJOUR;
    }

    /**
     * Set dATEASSURANCEVOYAGE
     *
     * @param \DateTime $dATEASSURANCEVOYAGE
     * @return PERDIEMS
     */
    public function setDATEASSURANCEVOYAGE($dATEASSURANCEVOYAGE)
    {
        $this->dATEASSURANCEVOYAGE = $dATEASSURANCEVOYAGE;

        return $this;
    }

    /**
     * Get dATEASSURANCEVOYAGE
     *
     * @return \DateTime 
     */
    public function getDATEASSURANCEVOYAGE()
    {
        return $this->dATEASSURANCEVOYAGE;
    }

    /**
     * Set dATEEXPIRATIONPASSEPORT
     *
     * @param \DateTime $dATEEXPIRATIONPASSEPORT
     * @return PERDIEMS
     */
    public function setDATEEXPIRATIONPASSEPORT($dATEEXPIRATIONPASSEPORT)
    {
        $this->dATEEXPIRATIONPASSEPORT = $dATEEXPIRATIONPASSEPORT;

        return $this;
    }

    /**
     * Get dATEEXPIRATIONPASSEPORT
     *
     * @return \DateTime 
     */
    public function getDATEEXPIRATIONPASSEPORT()
    {
        return $this->dATEEXPIRATIONPASSEPORT;
    }
}
