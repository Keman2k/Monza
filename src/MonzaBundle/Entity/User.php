<?php

namespace MonzaBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $name;

        /**
     * @var string
     */
    private $surname;


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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSurname($name)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * @var string
     */
    private $surname2;


    /**
     * Set surname2
     *
     * @param string $surname2
     *
     * @return User
     */
    public function setSurname2($surname2)
    {
        $this->surname2 = $surname2;

        return $this;
    }

    /**
     * Get surname2
     *
     * @return string
     */
    public function getSurname2()
    {
        return $this->surname2;
    }
    /**
     * @var string
     */
    private $surname3;


    /**
     * Set surname3
     *
     * @param string $surname3
     *
     * @return User
     */
    public function setSurname3($surname3)
    {
        $this->surname3 = $surname3;

        return $this;
    }

    /**
     * Get surname3
     *
     * @return string
     */
    public function getSurname3()
    {
        return $this->surname3;
    }
}
