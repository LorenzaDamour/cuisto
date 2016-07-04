<?php

namespace Partage\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atelier
 *
 * @ORM\Table(name="atelier")
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\AtelierRepository")
 */
class Atelier
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Equipements", type="string", length=255)
     */
    private $equipements;

    /**
     * @var string
     *
     * @ORM\Column(name="Ingredients", type="string", length=255)
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="Tarif", type="string", length=255)
     */
    private $tarif;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Atelier
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
     * Set equipements
     *
     * @param string $equipements
     *
     * @return Atelier
     */
    public function setEquipements($equipements)
    {
        $this->equipements = $equipements;

        return $this;
    }

    /**
     * Get equipements
     *
     * @return string
     */
    public function getEquipements()
    {
        return $this->equipements;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Atelier
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Atelier
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }
}

