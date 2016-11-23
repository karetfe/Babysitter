<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jaime
 *
 * @ORM\Table(name="jaime", indexes={@ORM\Index(name="FKjaime291783", columns={"idUser"})})
 * @ORM\Entity
 */
class Jaime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_jaime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJaime;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPar", type="integer", nullable=true)
     */
    private $idpar;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAgen", type="integer", nullable=true)
     */
    private $idagen;

    /**
     * @var integer
     *
     * @ORM\Column(name="idBb", type="integer", nullable=true)
     */
    private $idbb;

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
     * Get idJaime
     *
     * @return integer 
     */
    public function getIdJaime()
    {
        return $this->idJaime;
    }

    /**
     * Set idpar
     *
     * @param integer $idpar
     * @return Jaime
     */
    public function setIdpar($idpar)
    {
        $this->idpar = $idpar;

        return $this;
    }

    /**
     * Get idpar
     *
     * @return integer 
     */
    public function getIdpar()
    {
        return $this->idpar;
    }

    /**
     * Set idagen
     *
     * @param integer $idagen
     * @return Jaime
     */
    public function setIdagen($idagen)
    {
        $this->idagen = $idagen;

        return $this;
    }

    /**
     * Get idagen
     *
     * @return integer 
     */
    public function getIdagen()
    {
        return $this->idagen;
    }

    /**
     * Set idbb
     *
     * @param integer $idbb
     * @return Jaime
     */
    public function setIdbb($idbb)
    {
        $this->idbb = $idbb;

        return $this;
    }

    /**
     * Get idbb
     *
     * @return integer 
     */
    public function getIdbb()
    {
        return $this->idbb;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Jaime
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
