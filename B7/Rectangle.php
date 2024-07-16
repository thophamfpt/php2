<?php

namespace B7;

class Rectangle
{
    public $chieuDai;
    public $chieuRong;

    public function __construct($chieuDai,$chieuRong)
    {
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
    }

    public function tinhDienTich()
    {
        return $this->chieuDai * $this->chieuRong;
    }

    public final function getname()
    {
        echo "đây là hình cn";
    }

    // public final function getname : khong cho class ghi de
}
