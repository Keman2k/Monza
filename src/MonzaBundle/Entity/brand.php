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
    private $brandPower;


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
}
