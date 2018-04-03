<?php

use App\Entity\Car;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements Context
{
    /**
     * @Given /^I wait "([^"]*)"$/
     */
    public function iWait($duration)
    {
        $this->getSession()->wait($duration * 1000);
    }

    private $car;

    /**
     * @Given A new car
     */
    public function aNewCar()
    {
        $this->car = new Car();
    }

    /**
     * @Then Car is constructed
     */
    public function carIsConstructed()
    {
        if( get_class($this->car) !== Car::class ){
            throw new \Exception('la voiture n\'a pas été construite');
        }

    }

    /**
     * @Then Car has :wheels weels
     */
    public function carHasFourWeels($weels)
    {
        if($weels !== $this->car->getWheels() ){
            throw new \Exception('La voiture n\'a pas ses '.$weels.' roues.');
        }
    }

    /**
     * @When I choose :color color
     */
    public function iChooseColor($color)
    {
        $this->car->setColor($color);
    }

    /**
     * @Then It is a : brand
     */
    public function itIsA($brand)
    {
        if($brand !== $this->car->getBrand()){
            throw new \Exception('La voiture n\'est pas de la bonne marque');
        }
    }




}