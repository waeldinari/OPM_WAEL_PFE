<?php

namespace OPM\PerdiemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MONTANT_PERDIEMS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\PerdiemsBundle\Entity\MONTANT_PERDIEMSRepository")
 */
class MONTANT_PERDIEMS
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
     * @ORM\Column(name="STATUT_ID", type="integer")
     */
    private $sTATUTID;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=50)
     */
    private $dESCRIPTION;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT", type="integer")
     */
    private $mONTANT;


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
     * Set sTATUTID
     *
     * @param integer $sTATUTID
     * @return MONTANT_PERDIEMS
     */
    public function setSTATUTID($sTATUTID)
    {
        $this->sTATUTID = $sTATUTID;

        return $this;
    }

    /**
     * Get sTATUTID
     *
     * @return integer 
     */
    public function getSTATUTID()
    {
        return $this->sTATUTID;
    }

    /**
     * Set dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return MONTANT_PERDIEMS
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
     * Set mONTANT
     *
     * @param integer $mONTANT
     * @return MONTANT_PERDIEMS
     */
    public function setMONTANT($mONTANT)
    {
        $this->mONTANT = $mONTANT;

        return $this;
    }

    /**
     * Get mONTANT
     *
     * @return integer 
     */
    public function getMONTANT()
    {
        return $this->mONTANT;
    }
}
