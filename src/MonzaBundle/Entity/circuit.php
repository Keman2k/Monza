<?php

namespace MonzaBundle\Entity;

/**
 * circuit
 */
class circuit
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $circuitName;

    /**
     * @var string
     */
    private $circuitDescription;

    /**
     * @var string
     */
    private $circuitImage;


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
     * Set circuitName
     *
     * @param string $circuitName
     *
     * @return circuit
     */
    public function setCircuitName($circuitName)
    {
        $this->circuitName = $circuitName;

        return $this;
    }

    /**
     * Get circuitName
     *
     * @return string
     */
    public function getCircuitName()
    {
        return $this->circuitName;
    }

    /**
     * Set circuitDescription
     *
     * @param string $circuitDescription
     *
     * @return circuit
     */
    public function setCircuitDescription($circuitDescription)
    {
        $this->circuitDescription = $circuitDescription;

        return $this;
    }

    /**
     * Get circuitDescription
     *
     * @return string
     */
    public function getCircuitDescription()
    {
        return $this->circuitDescription;
    }

    /**
     * Set circuitImage
     *
     * @param string $circuitImage
     *
     * @return circuit
     */
    public function setCircuitImage($circuitImage)
    {
        $this->circuitImage = $circuitImage;

        return $this;
    }

    /**
     * Get circuitImage
     *
     * @return string
     */
    public function getCircuitImage()
    {
        return $this->circuitImage;
    }
}
