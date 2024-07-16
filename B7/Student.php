<?php

namespace B7;

class Student extends Person
{
    public $className;
    public $studentCode;
    
    public function __construct($name, $age,$gender,$className,$studentCode)
    {
        parent::__construct($name, $age,$gender);
        $this->className = $className;
        $this->studentCode = $studentCode;
    }

    public function showStudent()
    {
        echo "Name: $this->name <br/>";
        echo "age: $this->age <br/>";
        echo "gender: $this->gender <br/>";
        echo "className: $this->className <br/>";
        echo "studentCode: $this->studentCode <br/>";

    }
}

