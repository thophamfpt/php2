<?php

require_once 'SanPham.php';
require_once 'LoaiSanPham.php';

$samsung = new LoaiSanPham('001', 'SamSung');
$Iphone = new SanPham('Sp001', 'Iphone 15 promax', '200000', '2', '001');

// var_dump($samsung); 
// var_dump($Iphone->getGia());

$Iphone1 = new SanPham('Sp001', 'Iphone 1 promax', '100000', '1', '001');
$Iphone2 = new SanPham('Sp002', 'Iphone 12 promax', '200000', '2', '001');
$Iphone3 = new SanPham('Sp003', 'Iphone 13 promax', '300000', '3', '001');
$Iphone4 = new SanPham('Sp004', 'Iphone 14 promax', '400000', '4', '001');

$tongGia = $Iphone1->getGia() + $Iphone2->getGia() + $Iphone3->getGia() + $Iphone4->getGia();
echo $tongGia;

