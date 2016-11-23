<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsabilite
 *
 * @ORM\Table(name="responsabilite")
 * @ORM\Entity
 */
class Responsabilite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsabbilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResponsabbilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_responsabilite", type="string", length=255, nullable=true)
     */
    private $nomResponsabilite;
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionR", type="string", length=255, nullable=true)
     */
    private $descriptionR;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offre", inversedBy="idResponsabbilite")
     * @ORM\JoinTable(name="responsabilite_offre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_responsabbilite", referencedColumnName="id_responsabbilite")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_offre", referencedColumnName="id_offre")
     *   }
     * )
     */
    private $idOffre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idOffre = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idResponsabbilite
     *
     * @return integer 
     */
    public function getIdResponsabbilite()
    {
        return $this->idResponsabbilite;
    }

    /**
     * Set nomResponsabilite
     *
     * @param string $nomResponsabilite
     * @return Responsabilite
     */
    public function setNomResponsabilite($nomResponsabilite)
    {
        $this->nomResponsabilite = $nomResponsabilite;

        return $this;
    }

    /**
     * Get nomResponsabilite
     *
     * @return string 
     */
    public function getNomResponsabilite()
    {
        return $this->nomResponsabilite;
    }
    public function getDescriptionR() {
        return $this->descriptionR;
    }

    public function setDescriptionR($descriptionR) {
        $this->descriptionR = $descriptionR;
    }

    
    /**
     * Add idOffre
     *
     * @param \BabySitter\BabySitterBundle\Entity\Offre $idOffre
     * @return Responsabilite
     */
    public function addIdOffre(\BabySitter\BabySitterBundle\Entity\Offre $idOffre)
    {
        $this->idOffre[] = $idOffre;

        return $this;
    }

    /**
     * Remove idOffre
     *
     * @param \BabySitter\BabySitterBundle\Entity\Offre $idOffre
     */
    public function removeIdOffre(\BabySitter\BabySitterBundle\Entity\Offre $idOffre)
    {
        $this->idOffre->removeElement($idOffre);
    }

    /**
     * Get idOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }
}
