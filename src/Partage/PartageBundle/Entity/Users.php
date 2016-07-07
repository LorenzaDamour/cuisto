<?php

namespace Partage\PartageBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;


    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255)
     */
    private $tel;

    /**
    * @ORM\OneToMany(targetEntity="Atelier", mappedBy="users")
    */
    protected $atelier;


    /**
      * atelier demandé par l'utilisateur.
      * @ORM\ManyToMany(targetEntity="Atelier", mappedBy="atelierassiste")
      */
      protected $assisteAtelier;

    public function __construct()
        {
            parent::__construct();
            // your own logic
        }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Users
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
     *
     * @return Users
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Users
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Users
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     *
     * @return Users
     */
    public function addAtelier(\Partage\PartageBundle\Entity\Atelier $atelier)
    {
        $this->atelier[] = $atelier;

        return $this;
    }

    /**
     * Remove atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     */
    public function removeAtelier(\Partage\PartageBundle\Entity\Atelier $atelier)
    {
        $this->atelier->removeElement($atelier);
    }

    /**
     * Get atelier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAtelier()
    {
        return $this->atelier;
    }

    /**
     * Add assisteAtelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $assisteAtelier
     *
     * @return Users
     */
    public function addAssisteAtelier(\Partage\PartageBundle\Entity\Atelier $assisteAtelier)
    {
        $this->assisteAtelier[] = $assisteAtelier;

        return $this;
    }

    /**
     * Remove assisteAtelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $assisteAtelier
     */
    public function removeAssisteAtelier(\Partage\PartageBundle\Entity\Atelier $assisteAtelier)
    {
        $this->assisteAtelier->removeElement($assisteAtelier);
    }

    /**
     * Get assisteAtelier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssisteAtelier()
    {
        return $this->assisteAtelier;
    }
}
