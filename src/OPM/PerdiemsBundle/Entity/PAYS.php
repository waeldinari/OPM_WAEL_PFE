<?php

namespace OPM\PerdiemsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PAYS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OPM\PerdiemsBundle\Entity\PAYSRepository")
 */
class PAYS
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
     * @ORM\Column(name="PAYS_ID", type="integer")
     */
    private $pAYSID;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=100)
     */
    private $dESCRIPTION;

    /**
     * @var integer
     *
     * @ORM\Column(name="PAYS_DE_MAGHREB", type="integer")
     */
    private $pAYSDEMAGHREB;


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
     * Set pAYSID
     *
     * @param integer $pAYSID
     * @return PAYS
     */
    public function setPAYSID($pAYSID)
    {
        $this->pAYSID = $pAYSID;

        return $this;
    }

    /**
     * Get pAYSID
     *
     * @return integer 
     */
    public function getPAYSID()
    {
        return $this->pAYSID;
    }

    /**
     * Set dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return PAYS
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
     * Set pAYSDEMAGHREB
     *
     * @param integer $pAYSDEMAGHREB
     * @return PAYS
     */
    public function setPAYSDEMAGHREB($pAYSDEMAGHREB)
    {
        $this->pAYSDEMAGHREB = $pAYSDEMAGHREB;

        return $this;
    }

    /**
     * Get pAYSDEMAGHREB
     *
     * @return integer 
     */
    public function getPAYSDEMAGHREB()
    {
        return $this->pAYSDEMAGHREB;
    }
}
