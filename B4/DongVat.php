<?php

class DongVat
{
    // Phạm vi truy cập, access modifier
    // Private, public, protected, default

    // Thuộc tính (Properties)
    public $name;
    public $mauLong;
    public $soChan;

    // Hàm tạo constructer
    public function __construct($name, $mauLong, $soChan)
    {
        $this->name = $name;
        $this->mauLong = $mauLong;
        $this->soChan = $soChan;
    }
    // Phương Thức (methods)
    public function tiengKeu($tieng)
    {
        echo $tieng;
    }
    // Getter
    public function getName()
    {
        return $this->name;
    }
    // Set
    public function setName($name)
    {
        $this->name = $name;
    }
    // Hàm hủy destructer
    public function __destruct(){
        echo "Doi tuong nay da duoc huyo";
    }

}

// Khởi tạo object
$choA = new DongVat('siba', 'vang', '4');
echo $choA->getName();
$choA->setName('pitbul');
echo $choA->getName();
$choA->tiengKeu(' gaugau');
