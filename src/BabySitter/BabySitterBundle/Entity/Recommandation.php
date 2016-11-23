<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recommandation
 *
 * @ORM\Table(name="recommandation", indexes={@ORM\Index(name="FKrecommanda461443", columns={"idUser"})})
 * @ORM\Entity
 */
class Recommandation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_recommandation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecommandation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_recommandation", type="string", length=255, nullable=true)
     */
    private $nomRecommandation;

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
     * Get idRecommandation
     *
     * @return integer 
     */
    public function getIdRecommandation()
    {
        return $this->idRecommandation;
    }

    /**
     * Set nomRecommandation
     *
     * @param string $nomRecommandation
     * @return Recommandation
     */
    public function setNomRecommandation($nomRecommandation)
    {
        $this->nomRecommandation = $nomRecommandation;

        return $this;
    }

    /**
     * Get nomRecommandation
     *
     * @return string 
     */
    public function getNomRecommandation()
    {
        return $this->nomRecommandation;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Recommandation
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
