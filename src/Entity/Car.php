<?php
namespace App\Entity;


class Car
{

    private $color;
    private $wheels;
    private $brand;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param mixed $color
     * @return Car
     */
    public function setColor($color)
    {
        $this->color = $color;

        if($color==="red"){
            $brand = "Ferrari";
        }
        else{
            $brand = "Other";
        }

        return $this;
    }


}