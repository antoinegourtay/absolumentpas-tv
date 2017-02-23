<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Actuality
 *
 * @ORM\Table(name="actuality")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActualityRepository")
 */
class Actuality
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
     * @ORM\Column(name="title_news", type="string", length=255)
     */
    private $titleNews;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle_news", type="string", length=255)
     */
    private $subtitleNews;

    /**
     * @var string
     *
     * @ORM\Column(name="image_news", type="string", length=255)
     */
    private $imageNews;

    /**
     * @var string
     *
     * @ORM\Column(name="content_news", type="text")
     */
    private $contentNews;

    /**
     * @var int
     *
     * @ORM\Column(name="author_news", type="integer")
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="shipping_id", referencedColumnName="id")
     */
    private $authorNews;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_news", type="datetime")
     */
    private $dateNews;

    /**
     * @var int
     *
     * @ORM\Column(name="rank_news", type="integer")
     */
    private $rankNews;


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
     * Set titleNews
     *
     * @param string $titleNews
     *
     * @return Actuality
     */
    public function setTitleNews($titleNews)
    {
        $this->titleNews = $titleNews;

        return $this;
    }

    /**
     * Get titleNews
     *
     * @return string
     */
    public function getTitleNews()
    {
        return $this->titleNews;
    }

    /**
     * Set subtitleNews
     *
     * @param string $subtitleNews
     *
     * @return Actuality
     */
    public function setSubtitleNews($subtitleNews)
    {
        $this->subtitleNews = $subtitleNews;

        return $this;
    }

    /**
     * Get subtitleNews
     *
     * @return string
     */
    public function getSubtitleNews()
    {
        return $this->subtitleNews;
    }

    /**
     * Set imageNews
     *
     * @param string $imageNews
     *
     * @return Actuality
     */
    public function setImageNews($imageNews)
    {
        $this->imageNews = $imageNews;

        return $this;
    }

    /**
     * Get imageNews
     *
     * @return string
     */
    public function getImageNews()
    {
        return $this->imageNews;
    }

    /**
     * Set contentNews
     *
     * @param string $contentNews
     *
     * @return Actuality
     */
    public function setContentNews($contentNews)
    {
        $this->contentNews = $contentNews;

        return $this;
    }

    /**
     * Get contentNews
     *
     * @return string
     */
    public function getContentNews()
    {
        return $this->contentNews;
    }

    /**
     * Set authorNews
     *
     * @param integer $authorNews
     *
     * @return Actuality
     */
    public function setAuthorNews($authorNews)
    {
        $this->authorNews = $authorNews;

        return $this;
    }

    /**
     * Get authorNews
     *
     * @return int
     */
    public function getAuthorNews()
    {
        return $this->authorNews;
    }

    /**
     * Set dateNews
     *
     * @param \DateTime $dateNews
     *
     * @return Actuality
     */
    public function setDateNews($dateNews)
    {
        $this->dateNews = $dateNews;

        return $this;
    }

    /**
     * Get dateNews
     *
     * @return \DateTime
     */
    public function getDateNews()
    {
        return $this->dateNews;
    }

    /**
     * Set rankNews
     *
     * @param integer $rankNews
     *
     * @return Actuality
     */
    public function setRankNews($rankNews)
    {
        $this->rankNews = $rankNews;

        return $this;
    }

    /**
     * Get rankNews
     *
     * @return int
     */
    public function getRankNews()
    {
        return $this->rankNews;
    }
}

