<?php

namespace CarRentalBundle\Entity;

/**
 * Car
 */
class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var int
     */
    private $horsepower;


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
     * Set name
     *
     * @param string $name
     *
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;

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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Car
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Car
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Car
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set horsepower
     *
     * @param integer $horsepower
     *
     * @return Car
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;

        return $this;
    }

    /**
     * Get horsepower
     *
     * @return int
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }
}

