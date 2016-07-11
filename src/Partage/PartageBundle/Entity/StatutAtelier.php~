<?php

namespace Partage\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutAtelier
 *
 * @ORM\Table(name="statut_atelier")
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\StatutAtelierRepository")
 */
class StatutAtelier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;


        /**
        * @ORM\ManyToOne(targetEntity="Users", inversedBy="statut")
        */
        private $user;
        /**
        * @ORM\ManyToOne(targetEntity="Atelier", inversedBy="statut")
        */
        private $atelier;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return StatutAtelier
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set user
     *
     * @param \Partage\PartageBundle\Entity\Users $user
     *
     * @return StatutAtelier
     */
    public function setUser(\Partage\PartageBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Partage\PartageBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     *
     * @return StatutAtelier
     */
    public function setAtelier(\Partage\PartageBundle\Entity\Atelier $atelier = null)
    {
        $this->atelier = $atelier;

        return $this;
    }

    /**
     * Get atelier
     *
     * @return \Partage\PartageBundle\Entity\Atelier
     */
    public function getAtelier()
    {
        return $this->atelier;
    }
}
