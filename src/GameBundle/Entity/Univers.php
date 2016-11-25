<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Univers
 *
 * @ORM\Table(name="univers")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\UniversRepository")
 */
class Univers
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse_production", type="integer")
     */
    private $vitesseProduction;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse_flotte", type="integer")
     */
    private $vitesseFlotte;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse_jeu", type="integer")
     */
    private $vitesseJeu;

    /**
     * Get id
     *
     * @return integer
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
     * @return Univers
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
     * Set vitesseProduction
     *
     * @param integer $vitesseProduction
     *
     * @return Univers
     */
    public function setVitesseProduction($vitesseProduction)
    {
        $this->vitesseProduction = $vitesseProduction;

        return $this;
    }

    /**
     * Get vitesseProduction
     *
     * @return integer
     */
    public function getVitesseProduction()
    {
        return $this->vitesseProduction;
    }

    /**
     * Set vitesseFlotte
     *
     * @param integer $vitesseFlotte
     *
     * @return Univers
     */
    public function setVitesseFlotte($vitesseFlotte)
    {
        $this->vitesseFlotte = $vitesseFlotte;

        return $this;
    }

    /**
     * Get vitesseFlotte
     *
     * @return integer
     */
    public function getVitesseFlotte()
    {
        return $this->vitesseFlotte;
    }

    /**
     * Set vitesseJeu
     *
     * @param integer $vitesseJeu
     *
     * @return Univers
     */
    public function setVitesseJeu($vitesseJeu)
    {
        $this->vitesseJeu = $vitesseJeu;

        return $this;
    }

    /**
     * Get vitesseJeu
     *
     * @return integer
     */
    public function getVitesseJeu()
    {
        return $this->vitesseJeu;
    }
}
