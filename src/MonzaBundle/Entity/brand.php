<?php

namespace MonzaBundle\Entity;

/**
 * brand
 */
class brand
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $brandName;

    /**
     * @var string
     */
    private $brandHistory;

    /**
     * @var string
     */
    private $brandModel;

    /**
     * @var string
     */
    private $brandPower;

    /**
     * @var string
     */
    private $brandImage;


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
     * Set brandName
     *
     * @param string $brandName
     *
     * @return brand
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set brandHistory
     *
     * @param string $brandHistory
     *
     * @return brand
     */
    public function setBrandHistory($brandHistory)
    {
        $this->brandHistory = $brandHistory;

        return $this;
    }

    /**
     * Get brandHistory
     *
     * @return string
     */
    public function getBrandHistory()
    {
        return $this->brandHistory;
    }

    /**
     * Set brandModel
     *
     * @param string $brandModel
     *
     * @return brand
     */
    public function setBrandModel($brandModel)
    {
        $this->brandModel = $brandModel;

        return $this;
    }

    /**
     * Get brandModel
     *
     * @return string
     */
    public function getBrandModel()
    {
        return $this->brandModel;
    }

    /**
     * Set brandPower
     *
     * @param string $brandPower
     *
     * @return brand
     */
    public function setBrandPower($brandPower)
    {
        $this->brandPower = $brandPower;

        return $this;
    }

    /**
     * Get brandPower
     *
     * @return string
     */
    public function getBrandPower()
    {
        return $this->brandPower;
    }

    /**
     * Set brandImage
     *
     * @param string $brandImage
     *
     * @return brand
     */
    public function setBrandImage($brandImage)
    {
        $this->brandImage = $brandImage;

        return $this;
    }

    /**
     * Get brandImage
     *
     * @return string
     */
    public function getBrandImage()
    {
        return $this->brandImage;
    }
    /**
     * @var string
     */
    private $brandVideo;

    /**
     * @var string
     */
    private $brandVMax;


    /**
     * Set brandVideo
     *
     * @param string $brandVideo
     *
     * @return brand
     */
    public function setBrandVideo($brandVideo)
    {
        $this->brandVideo = $brandVideo;

        return $this;
    }

    /**
     * Get brandVideo
     *
     * @return string
     */
    public function getBrandVideo()
    {
        return $this->brandVideo;
    }

    /**
     * Set brandVMax
     *
     * @param string $brandVMax
     *
     * @return brand
     */
    public function setBrandVMax($brandVMax)
    {
        $this->brandVMax = $brandVMax;

        return $this;
    }

    /**
     * Get brandVMax
     *
     * @return string
     */
    public function getBrandVMax()
    {
        return $this->brandVMax;
    }
    /**
     * @var string
     */
    private $brandtitle;


    /**
     * Set brandtitle
     *
     * @param string $brandtitle
     *
     * @return brand
     */
    public function setBrandtitle($brandtitle)
    {
        $this->brandtitle = $brandtitle;

        return $this;
    }

    /**
     * Get brandtitle
     *
     * @return string
     */
    public function getBrandtitle()
    {
        return $this->brandtitle;
    }
}
