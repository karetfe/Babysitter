<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="FKoffre55620", columns={"idUser"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_offre", type="string", length=255, nullable=true)
     */
    private $titreOffre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_enfant", type="integer", nullable=true)
     */
    private $nbrEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="age_enfant", type="string", length=255, nullable=true)
     */
    private $ageEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type_planification", type="string", length=255, nullable=true)
     */
    private $typePlanification;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_offre", type="string", length=255, nullable=true)
     */
    private $dateDebutOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_offre", type="string", length=255, nullable=true)
     */
    private $dateFinOffre;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=true)
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="offre_date", type="string", length=20, nullable=true)
     */
    private $offreDate;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Qualite", mappedBy="idOffre")
     */
    private $idQualite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Responsabilite", mappedBy="idOffre")
     */
    private $idResponsabbilite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idQualite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idResponsabbilite = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set titreOffre
     *
     * @param string $titreOffre
     * @return Offre
     */
    public function setTitreOffre($titreOffre)
    {
        $this->titreOffre = $titreOffre;

        return $this;
    }

    /**
     * Get titreOffre
     *
     * @return string 
     */
    public function getTitreOffre()
    {
        return $this->titreOffre;
    }

    /**
     * Set nbrEnfant
     *
     * @param integer $nbrEnfant
     * @return Offre
     */
    public function setNbrEnfant($nbrEnfant)
    {
        $this->nbrEnfant = $nbrEnfant;

        return $this;
    }

    /**
     * Get nbrEnfant
     *
     * @return integer 
     */
    public function getNbrEnfant()
    {
        return $this->nbrEnfant;
    }

    /**
     * Set ageEnfant
     *
     * @param string $ageEnfant
     * @return Offre
     */
    public function setAgeEnfant($ageEnfant)
    {
        $this->ageEnfant = $ageEnfant;

        return $this;
    }

    /**
     * Get ageEnfant
     *
     * @return string 
     */
    public function getAgeEnfant()
    {
        return $this->ageEnfant;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
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
     * Set typePlanification
     *
     * @param string $typePlanification
     * @return Offre
     */
    public function setTypePlanification($typePlanification)
    {
        $this->typePlanification = $typePlanification;

        return $this;
    }

    /**
     * Get typePlanification
     *
     * @return string 
     */
    public function getTypePlanification()
    {
        return $this->typePlanification;
    }

    /**
     * Set dateDebutOffre
     *
     * @param string $dateDebutOffre
     * @return Offre
     */
    public function setDateDebutOffre($dateDebutOffre)
    {
        $this->dateDebutOffre = $dateDebutOffre;

        return $this;
    }

    /**
     * Get dateDebutOffre
     *
     * @return string 
     */
    public function getDateDebutOffre()
    {
        return $this->dateDebutOffre;
    }

    /**
     * Set dateFinOffre
     *
     * @param string $dateFinOffre
     * @return Offre
     */
    public function setDateFinOffre($dateFinOffre)
    {
        $this->dateFinOffre = $dateFinOffre;

        return $this;
    }

    /**
     * Get dateFinOffre
     *
     * @return string 
     */
    public function getDateFinOffre()
    {
        return $this->dateFinOffre;
    }

    /**
     * Set tarif
     *
     * @param float $tarif
     * @return Offre
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set offreDate
     *
     * @param string $offreDate
     * @return Offre
     */
    public function setOffreDate($offreDate)
    {
        $this->offreDate = $offreDate;

        return $this;
    }

    /**
     * Get offreDate
     *
     * @return string 
     */
    public function getOffreDate()
    {
        return $this->offreDate;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Offre
     */
    public function setIduser(\BabySitter\BabySitterBundle\Entity\Utilisateur $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \BabySitter\BabySitterBundle\Entity\Utilisateur 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Add idQualite
     *
     * @param \BabySitter\BabySitterBundle\Entity\Qualite $idQualite
     * @return Offre
     */
    public function addIdQualite(\BabySitter\BabySitterBundle\Entity\Qualite $idQualite)
    {
        $this->idQualite[] = $idQualite;

        return $this;
    }

    /**
     * Remove idQualite
     *
     * @param \BabySitter\BabySitterBundle\Entity\Qualite $idQualite
     */
    public function removeIdQualite(\BabySitter\BabySitterBundle\Entity\Qualite $idQualite)
    {
        $this->idQualite->removeElement($idQualite);
    }

    /**
     * Get idQualite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdQualite()
    {
        return $this->idQualite;
    }

    /**
     * Add idResponsabbilite
     *
     * @param \BabySitter\BabySitterBundle\Entity\Responsabilite $idResponsabbilite
     * @return Offre
     */
    public function addIdResponsabbilite(\BabySitter\BabySitterBundle\Entity\Responsabilite $idResponsabbilite)
    {
        $this->idResponsabbilite[] = $idResponsabbilite;

        return $this;
    }

    /**
     * Remove idResponsabbilite
     *
     * @param \BabySitter\BabySitterBundle\Entity\Responsabilite $idResponsabbilite
     */
    public function removeIdResponsabbilite(\BabySitter\BabySitterBundle\Entity\Responsabilite $idResponsabbilite)
    {
        $this->idResponsabbilite->removeElement($idResponsabbilite);
    }

    /**
     * Get idResponsabbilite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdResponsabbilite()
    {
        return $this->idResponsabbilite;
    }
}
