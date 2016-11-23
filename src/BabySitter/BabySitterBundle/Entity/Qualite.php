<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualite
 *
 * @ORM\Table(name="qualite")
 * @ORM\Entity
 */
class Qualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_qualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQualite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_qualite", type="string", length=255, nullable=true)
     */
    private $nomQualite;
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionQ", type="string", length=255, nullable=true)
     */
    private $descriptionQ;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offre", inversedBy="idQualite")
     * @ORM\JoinTable(name="qualite_offre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_qualite", referencedColumnName="id_qualite")
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
     * Get idQualite
     *
     * @return integer 
     */
    public function getIdQualite()
    {
        return $this->idQualite;
    }

    /**
     * Set nomQualite
     *
     * @param string $nomQualite
     * @return Qualite
     */
    public function setNomQualite($nomQualite)
    {
        $this->nomQualite = $nomQualite;

        return $this;
    }

    /**
     * Get nomQualite
     *
     * @return string 
     */
    public function getNomQualite()
    {
        return $this->nomQualite;
    }
    public function getDescriptionQ() {
        return $this->descriptionQ;
    }

    public function setDescriptionQ($descriptionQ) {
        $this->descriptionQ = $descriptionQ;
    }

    
    /**
     * Add idOffre
     *
     * @param \BabySitter\BabySitterBundle\Entity\Offre $idOffre
     * @return Qualite
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
