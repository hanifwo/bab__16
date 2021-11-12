<?php

//parent class
class warga {
    protected $kota="aku warga kota malang";
    public function kecamatan() {
        return "<br>aku dari kecamatan asjk";
    }
}

//child class 
class orang extends warga {
    function kenalkan() {
        return "Haloo, AHD". $this->kota;
    }
}

//instalasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();
echo $obj_orang->kecamatan();


?>