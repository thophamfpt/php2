<?php
namespace B7;

class Person
{
    public $name;
    public $age;
    public $gender;

    public function __construct($name,$age,$gender)
    {
         $this->name = $name;
         $this->age = $age;
         $this->gender = $gender;
    }
}