<?php

namespace MonzaBundle\Entity;

/**
 * tuteur
 */
class tuteur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tuteurName;

    /**
     * @var string
     */
    private $tuteurNickname;

    /**
     * @var string
     */
    private $tuteurAge;

    /**
     * @var string
     */
    private $tuteurSpecialite;

    /**
     * @var string
     */
    private $tuteurImage;


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
     * Set tuteurName
     *
     * @param string $tuteurName
     *
     * @return tuteur
     */
    public function setTuteurName($tuteurName)
    {
        $this->tuteurName = $tuteurName;

        return $this;
    }

    /**
     * Get tuteurName
     *
     * @return string
     */
    public function getTuteurName()
    {
        return $this->tuteurName;
    }

    /**
     * Set tuteurNickname
     *
     * @param string $tuteurNickname
     *
     * @return tuteur
     */
    public function setTuteurNickname($tuteurNickname)
    {
        $this->tuteurNickname = $tuteurNickname;

        return $this;
    }

    /**
     * Get tuteurNickname
     *
     * @return string
     */
    public function getTuteurNickname()
    {
        return $this->tuteurNickname;
    }

    /**
     * Set tuteurAge
     *
     * @param string $tuteurAge
     *
     * @return tuteur
     */
    public function setTuteurAge($tuteurAge)
    {
        $this->tuteurAge = $tuteurAge;

        return $this;
    }

    /**
     * Get tuteurAge
     *
     * @return string
     */
    public function getTuteurAge()
    {
        return $this->tuteurAge;
    }

    /**
     * Set tuteurSpecialite
     *
     * @param string $tuteurSpecialite
     *
     * @return tuteur
     */
    public function setTuteurSpecialite($tuteurSpecialite)
    {
        $this->tuteurSpecialite = $tuteurSpecialite;

        return $this;
    }

    /**
     * Get tuteurSpecialite
     *
     * @return string
     */
    public function getTuteurSpecialite()
    {
        return $this->tuteurSpecialite;
    }

    /**
     * Set tuteurImage
     *
     * @param string $tuteurImage
     *
     * @return tuteur
     */
    public function setTuteurImage($tuteurImage)
    {
        $this->tuteurImage = $tuteurImage;

        return $this;
    }

    /**
     * Get tuteurImage
     *
     * @return string
     */
    public function getTuteurImage()
    {
        return $this->tuteurImage;
    }
}
