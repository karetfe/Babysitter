<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FKannonce156934", columns={"idUser"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_annonce", type="string", length=255, nullable=true)
     */
    private $titreAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilite", type="string", length=255, nullable=true)
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="annonce_date", type="string", length=255, nullable=true)
     */
    private $annonceDate;

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
     * Get idAnnonce
     *
     * @return integer 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set titreAnnonce
     *
     * @param string $titreAnnonce
     * @return Annonce
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce
     *
     * @return string 
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
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
     * Set disponibilite
     *
     * @param string $disponibilite
     * @return Annonce
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return string 
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set annonceDate
     *
     * @param \DateTime $annonceDate
     * @return Annonce
     */
    public function setAnnonceDate($annonceDate)
    {
        $this->annonceDate = $annonceDate;

        return $this;
    }

    /**
     * Get annonceDate
     *
     * @return \DateTime 
     */
    public function getAnnonceDate()
    {
        return $this->annonceDate;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Annonce
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
