<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgrammeRepository")
 */
class Programme
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_de_saison", type="integer")
     */
    private $numeroDeSaison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_diffusion", type="datetime")
     */
    private $dateDeDiffusion;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Programme
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set numeroDeSaison
     *
     * @param integer $numeroDeSaison
     *
     * @return Programme
     */
    public function setNumeroDeSaison($numeroDeSaison)
    {
        $this->numeroDeSaison = $numeroDeSaison;

        return $this;
    }

    /**
     * Get numeroDeSaison
     *
     * @return int
     */
    public function getNumeroDeSaison()
    {
        return $this->numeroDeSaison;
    }

    /**
     * Set dateDeDiffusion
     *
     * @param \DateTime $dateDeDiffusion
     *
     * @return Programme
     */
    public function setDateDeDiffusion($dateDeDiffusion)
    {
        $this->dateDeDiffusion = $dateDeDiffusion;

        return $this;
    }

    /**
     * Get dateDeDiffusion
     *
     * @return \DateTime
     */
    public function getDateDeDiffusion()
    {
        return $this->dateDeDiffusion;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Programme
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Programme
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

