<?php

namespace B7;
class Square extends Rectangle
{
    public function __construct($canh)
    {
       $this->chieuDai = $canh;
       $this->chieuRong = $canh;
    }

    // public function getName(){
    //     echo " day la hinh vuong";
    // }
}