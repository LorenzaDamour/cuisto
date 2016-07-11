<?php

namespace Partage\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\ParticipationRepository")
 */
class Participation
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
     * @var date
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     * @var date
     *
     * @ORM\Column(name="Heure", type="time")
     */
    private $heure;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="Participation")
      * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */

     private $user;

  

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Participation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return Participations
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->atelier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \Partage\PartageBundle\Entity\Users $user
     *
     * @return Participation
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
     * Add atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     *
     * @return Participation
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
}
