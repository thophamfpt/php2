<?php
class Person
{
    private $name;
    private $yearOfBirth;
    private $address;

    public function __construct($name, $yearOfBirth, $address)
    {
        $this->name = $name;
        $this->yearOfBirth = $yearOfBirth;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function tinhTuoi($currentYear)
    {
        return $currentYear - $this->yearOfBirth;
    }
}

// Khai báo 2 đối tượng từ class Person
$person1 = new Person("Quang Tho", 2004, "123 My Dinh");
$person2 = new Person("Tran Thuan", 1999, "456 Dinh Thon");

// So sánh tuổi và hiển thị Person có tuổi lớn hơn
$currentYear = 2024;
$age1 = $person1->tinhTuoi($currentYear);
$age2 = $person2->tinhTuoi($currentYear);

if ($age1 > $age2) {
    echo $person1->getName() . " " . $age1;
} else {
    echo $person2->getName() . " " . $age2;
}
