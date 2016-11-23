<?php

namespace BabySitter\BabySitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte", indexes={@ORM\Index(name="FKcompte408978", columns={"idUser"})})
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCompte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

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
     * Get idcompte
     *
     * @return integer 
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Compte
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return Compte
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Compte
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set iduser
     *
     * @param \BabySitter\BabySitterBundle\Entity\Utilisateur $iduser
     * @return Compte
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
