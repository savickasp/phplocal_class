<?php

class Random
{
    public $name;
    public $surname;
    public $city;


    public function __construct($name, $surname, $city)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->city = $city;
        $this->printSentance();
    }

    public function printSentance()
    {
        $this->printName();
        $this->printSurname();
        $this->printCity();
    }

    public function printName()
    {
        print " Name: $this->name";
    }

    public function printSurname()
    {
        print " Surname: $this->surname";
    }

    public function printCity()
    {
        print " City: $this->city";
    }
}