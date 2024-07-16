<?php

require_once 'Rectangle.php';
require_once 'Square.php';
require_once 'Person.php';
require_once 'Student.php';
require_once 'Number.php';

use B7\Rectangle;
use B7\Square;
use B7\Person;
use B7\Student;
use B7\Number;


// $hcn = new Rectangle(5,10);
// $vuong = new Square(6);

// echo "Dien tich la hcn la : " . $hcn->tinhDienTich();
// echo "Dien tich la vuong la : " . $vuong->tinhDienTich();

// $hcn->getname();
// $vuong->getName();

$student = new Student('tho',20,'nam','Wd18320','PH42116');
$student->showStudent();

// Tinh 10 * pi

echo 10 * Number::$pi;
echo Number::showMessage();

