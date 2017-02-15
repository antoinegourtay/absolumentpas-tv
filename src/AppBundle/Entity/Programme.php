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
     * @ORM\Column(name="title_program", type="string", length=255)
     */
    private $titleProgram;

    /**
     * @var int
     *
     * @ORM\Column(name="number_season", type="integer")
     */
    private $numberSeason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_program", type="datetime")
     */
    private $dateProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="image_program", type="string", length=255)
     */
    private $imageProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="description_program", type="text")
     */
    private $descriptionProgram;


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
     * Set titleProgram
     *
     * @param string $titleProgram
     *
     * @return Programme
     */
    public function setTitleProgram($titleProgram)
    {
        $this->titleProgram = $titleProgram;

        return $this;
    }

    /**
     * Get titleProgram
     *
     * @return string
     */
    public function getTitleProgram()
    {
        return $this->titleProgram;
    }

    /**
     * Set numberSeason
     *
     * @param integer $numberSeason
     *
     * @return Programme
     */
    public function setNumberSeason($numberSeason)
    {
        $this->numberSeason = $numberSeason;

        return $this;
    }

    /**
     * Get numberSeason
     *
     * @return int
     */
    public function getNumberSeason()
    {
        return $this->numberSeason;
    }

    /**
     * Set dateProgram
     *
     * @param \DateTime $dateProgram
     *
     * @return Programme
     */
    public function setDateProgram($dateProgram)
    {
        $this->dateProgram = $dateProgram;

        return $this;
    }

    /**
     * Get dateProgram
     *
     * @return \DateTime
     */
    public function getDateProgram()
    {
        return $this->dateProgram;
    }

    /**
     * Set imageProgram
     *
     * @param string $imageProgram
     *
     * @return Programme
     */
    public function setImageProgram($imageProgram)
    {
        $this->imageProgram = $imageProgram;

        return $this;
    }

    /**
     * Get imageProgram
     *
     * @return string
     */
    public function getImageProgram()
    {
        return $this->imageProgram;
    }

    /**
     * Set descriptionProgram
     *
     * @param string $descriptionProgram
     *
     * @return Programme
     */
    public function setDescriptionProgram($descriptionProgram)
    {
        $this->descriptionProgram = $descriptionProgram;

        return $this;
    }

    /**
     * Get descriptionProgram
     *
     * @return string
     */
    public function getDescriptionProgram()
    {
        return $this->descriptionProgram;
    }
}

