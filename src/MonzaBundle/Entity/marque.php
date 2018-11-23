<?php

namespace MonzaBundle\Entity;

/**
 * marque
 */
class marque
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $puissance;

    /**
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $histoire;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return marque
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return marque
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set puissance
     *
     * @param string $puissance
     *
     * @return marque
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return marque
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set histoire
     *
     * @param string $histoire
     *
     * @return marque
     */
    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;

        return $this;
    }

    /**
     * Get histoire
     *
     * @return string
     */
    public function getHistoire()
    {
        return $this->histoire;
    }
}

