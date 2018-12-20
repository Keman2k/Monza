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
    /**
     * @var string
     */
    private $circuitTitre;

    /**
     * @var string
     */
    private $circuitTour;

    /**
     * @var string
     */
    private $circuitPilote;

    /**
     * @var number
     */
    private $circuitVirage;


    /**
     * Set circuitTitre
     *
     * @param string $circuitTitre
     *
     * @return circuit
     */
    public function setCircuitTitre($circuitTitre)
    {
        $this->circuitTitre = $circuitTitre;

        return $this;
    }

    /**
     * Get circuitTitre
     *
     * @return string
     */
    public function getCircuitTitre()
    {
        return $this->circuitTitre;
    }

    /**
     * Set circuitTour
     *
     * @param string $circuitTour
     *
     * @return circuit
     */
    public function setCircuitTour($circuitTour)
    {
        $this->circuitTour = $circuitTour;

        return $this;
    }

    /**
     * Get circuitTour
     *
     * @return string
     */
    public function getCircuitTour()
    {
        return $this->circuitTour;
    }

    /**
     * Set circuitPilote
     *
     * @param string $circuitPilote
     *
     * @return circuit
     */
    public function setCircuitPilote($circuitPilote)
    {
        $this->circuitPilote = $circuitPilote;

        return $this;
    }

    /**
     * Get circuitPilote
     *
     * @return string
     */
    public function getCircuitPilote()
    {
        return $this->circuitPilote;
    }

    /**
     * Set circuitVirage
     *
     * @param \number $circuitVirage
     *
     * @return circuit
     */
    public function setCircuitVirage(\number $circuitVirage)
    {
        $this->circuitVirage = $circuitVirage;

        return $this;
    }

    /**
     * Get circuitVirage
     *
     * @return \number
     */
    public function getCircuitVirage()
    {
        return $this->circuitVirage;
    }
    /**
     * @var string
     */
    private $circuitLongueur;


    /**
     * Set circuitLongueur
     *
     * @param string $circuitLongueur
     *
     * @return circuit
     */
    public function setCircuitLongueur($circuitLongueur)
    {
        $this->circuitLongueur = $circuitLongueur;

        return $this;
    }

    /**
     * Get circuitLongueur
     *
     * @return string
     */
    public function getCircuitLongueur()
    {
        return $this->circuitLongueur;
    }
}
