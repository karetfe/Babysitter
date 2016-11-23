<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="FKevenement707955", columns={"idUser"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_evenement", type="string", length=255, nullable=true)
     */
    private $nomEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_evenement", type="string", length=255, nullable=true)
     */
    private $dateDebutEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_evenement", type="string", length=255, nullable=true)
     */
    private $dateFinEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_evenement", type="string", length=255, nullable=true)
     */
    private $adresseEvenement;

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
     * Get idEvenement
     *
     * @return integer 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set nomEvenement
     *
     * @param string $nomEvenement
     * @return Evenement
     */
    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    /**
     * Get nomEvenement
     *
     * @return string 
     */
    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }

    /**
     * Set dateDebutEvenement
     *
     * @param string $dateDebutEvenement
     * @return Evenement
     */
    public function setDateDebutEvenement($dateDebutEvenement)
    {
        $this->dateDebutEvenement = $dateDebutEvenement;

        return $this;
    }

    /**
     * Get dateDebutEvenement
     *
     * @return string 
     */
    public function getDateDebutEvenement()
    {
        return $this->dateDebutEvenement;
    }

    /**
     * Set dateFinEvenement
     *
     * @param string $dateFinEvenement
     * @return Evenement
     */
    public function setDateFinEvenement($dateFinEvenement)
    {
        $this->dateFinEvenement = $dateFinEvenement;

        return $this;
    }

    /**
     * Get dateFinEvenement
     *
     * @return string 
     */
    public function getDateFinEvenement()
    {
        return $this->dateFinEvenement;
    }

    /**
     * Set adresseEvenement
     *
     * @param string $adresseEvenement
     * @return Evenement
     */
    public function setAdresseEvenement($adresseEvenement)
    {
        $this->adresseEvenement = $adresseEvenement;

        return $this;
    }

    /**
     * Get adresseEvenement
     *
     * @return string 
     */
    public function getAdresseEvenement()
    {
        return $this->adresseEvenement;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Evenement
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
}
