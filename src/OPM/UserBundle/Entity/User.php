<?php

namespace OPM\UserBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

 
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="UserCentres")
     */
    private $UserCentres;
    
    public function getUserCentres() {
        return $this->UserCentres;
    }

    public function setUserCentres($UserCentres) {
        $this->UserCentres = $UserCentres;
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

   
    /**
     * @var integer
     *
     * @ORM\Column(name="admin_temps", type="integer")
     */
    private $adminTemps;

    /**
     * @var integer
     *
     * @ORM\Column(name="dispense_temps", type="integer")
     */
    private $dispenseTemps;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_deb_imp", type="date")
     */
    private $datDebImp;

    /**
     * @var integer
     *
     * @ORM\Column(name="admin_imputation", type="integer")
     */
    private $adminImputation;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cin", type="string", length=32)
     */
    private $numCin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emission_cin", type="date")
     */
    private $dateEmissionCin;

    /**
     * @var string
     *
     * @ORM\Column(name="num_passeport", type="string", length=32)
     */
    private $numPasseport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emission_passeport", type="date")
     */
    private $dateEmissionPasseport;

    /**
     * @var integer
     *
     * @ORM\Column(name="gest_perdiems", type="integer")
     */
    private $gestPerdiems;

    /**
     * @var integer
     *
     * @ORM\Column(name="imputation_partielle", type="integer")
     */
    private $imputationPartielle;

    /**
     * @var string
     *
     * @ORM\Column(name="num_passeport_etranger", type="string", length=32)
     */
    private $numPasseportEtranger;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_passeport_etranger", type="date")
     */
    private $datePasseportEtranger;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer")
     */
    private $personId;


    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set advancedUser
     *
     * @param string $advancedUser
     * @return User
     */
    public function setAdvancedUser($advancedUser)
    {
        $this->advancedUser = $advancedUser;

        return $this;
    }

    /**
     * Get advancedUser
     *
     * @return string 
     */
    public function getAdvancedUser()
    {
        return $this->advancedUser;
    }

    /**
     * Set adminTemps
     *
     * @param integer $adminTemps
     * @return User
     */
    public function setAdminTemps($adminTemps)
    {
        $this->adminTemps = $adminTemps;

        return $this;
    }

    /**
     * Get adminTemps
     *
     * @return integer 
     */
    public function getAdminTemps()
    {
        return $this->adminTemps;
    }

    /**
     * Set dispenseTemps
     *
     * @param integer $dispenseTemps
     * @return User
     */
    public function setDispenseTemps($dispenseTemps)
    {
        $this->dispenseTemps = $dispenseTemps;

        return $this;
    }

    /**
     * Get dispenseTemps
     *
     * @return integer 
     */
    public function getDispenseTemps()
    {
        return $this->dispenseTemps;
    }

    /**
     * Set datDebImp
     *
     * @param \DateTime $datDebImp
     * @return User
     */
    public function setDatDebImp($datDebImp)
    {
        $this->datDebImp = $datDebImp;

        return $this;
    }

    /**
     * Get datDebImp
     *
     * @return \DateTime 
     */
    public function getDatDebImp()
    {
        return $this->datDebImp;
    }

    /**
     * Set adminImputation
     *
     * @param integer $adminImputation
     * @return User
     */
    public function setAdminImputation($adminImputation)
    {
        $this->adminImputation = $adminImputation;

        return $this;
    }

    /**
     * Get adminImputation
     *
     * @return integer 
     */
    public function getAdminImputation()
    {
        return $this->adminImputation;
    }

    /**
     * Set numCin
     *
     * @param string $numCin
     * @return User
     */
    public function setNumCin($numCin)
    {
        $this->numCin = $numCin;

        return $this;
    }

    /**
     * Get numCin
     *
     * @return string 
     */
    public function getNumCin()
    {
        return $this->numCin;
    }

    /**
     * Set dateEmissionCin
     *
     * @param \DateTime $dateEmissionCin
     * @return User
     */
    public function setDateEmissionCin($dateEmissionCin)
    {
        $this->dateEmissionCin = $dateEmissionCin;

        return $this;
    }

    /**
     * Get dateEmissionCin
     *
     * @return \DateTime 
     */
    public function getDateEmissionCin()
    {
        return $this->dateEmissionCin;
    }

    /**
     * Set numPasseport
     *
     * @param string $numPasseport
     * @return User
     */
    public function setNumPasseport($numPasseport)
    {
        $this->numPasseport = $numPasseport;

        return $this;
    }

    /**
     * Get numPasseport
     *
     * @return string 
     */
    public function getNumPasseport()
    {
        return $this->numPasseport;
    }

    /**
     * Set dateEmissionPasseport
     *
     * @param \DateTime $dateEmissionPasseport
     * @return User
     */
    public function setDateEmissionPasseport($dateEmissionPasseport)
    {
        $this->dateEmissionPasseport = $dateEmissionPasseport;

        return $this;
    }

    /**
     * Get dateEmissionPasseport
     *
     * @return \DateTime 
     */
    public function getDateEmissionPasseport()
    {
        return $this->dateEmissionPasseport;
    }

    /**
     * Set gestPerdiems
     *
     * @param integer $gestPerdiems
     * @return User
     */
    public function setGestPerdiems($gestPerdiems)
    {
        $this->gestPerdiems = $gestPerdiems;

        return $this;
    }

    /**
     * Get gestPerdiems
     *
     * @return integer 
     */
    public function getGestPerdiems()
    {
        return $this->gestPerdiems;
    }

    /**
     * Set imputationPartielle
     *
     * @param integer $imputationPartielle
     * @return User
     */
    public function setImputationPartielle($imputationPartielle)
    {
        $this->imputationPartielle = $imputationPartielle;

        return $this;
    }

    /**
     * Get imputationPartielle
     *
     * @return integer 
     */
    public function getImputationPartielle()
    {
        return $this->imputationPartielle;
    }

    /**
     * Set numPasseportEtranger
     *
     * @param string $numPasseportEtranger
     * @return User
     */
    public function setNumPasseportEtranger($numPasseportEtranger)
    {
        $this->numPasseportEtranger = $numPasseportEtranger;

        return $this;
    }

    /**
     * Get numPasseportEtranger
     *
     * @return string 
     */
    public function getNumPasseportEtranger()
    {
        return $this->numPasseportEtranger;
    }

    /**
     * Set datePasseportEtranger
     *
     * @param \DateTime $datePasseportEtranger
     * @return User
     */
    public function setDatePasseportEtranger($datePasseportEtranger)
    {
        $this->datePasseportEtranger = $datePasseportEtranger;

        return $this;
    }

    /**
     * Get datePasseportEtranger
     *
     * @return \DateTime 
     */
    public function getDatePasseportEtranger()
    {
        return $this->datePasseportEtranger;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return User
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    
      public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}


