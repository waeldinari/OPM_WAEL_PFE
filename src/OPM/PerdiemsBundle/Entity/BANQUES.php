<?php

namespace OPM\PerdiemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BANQUES
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\PerdiemsBundle\Entity\BANQUESRepository")
 */
class BANQUES
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
     * @ORM\Column(name="BANQUE_ID", type="integer")
     */
    private $bANQUEID;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=100)
     */
    private $dESCRIPTION;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_COMPTE", type="integer")
     */
    private $nUMCOMPTE;


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
     * Set bANQUEID
     *
     * @param integer $bANQUEID
     * @return BANQUES
     */
    public function setBANQUEID($bANQUEID)
    {
        $this->bANQUEID = $bANQUEID;

        return $this;
    }

    /**
     * Get bANQUEID
     *
     * @return integer 
     */
    public function getBANQUEID()
    {
        return $this->bANQUEID;
    }

    /**
     * Set dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return BANQUES
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
     * Set nUMCOMPTE
     *
     * @param integer $nUMCOMPTE
     * @return BANQUES
     */
    public function setNUMCOMPTE($nUMCOMPTE)
    {
        $this->nUMCOMPTE = $nUMCOMPTE;

        return $this;
    }

    /**
     * Get nUMCOMPTE
     *
     * @return integer 
     */
    public function getNUMCOMPTE()
    {
        return $this->nUMCOMPTE;
    }
}
