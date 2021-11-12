<?php

class orang{
    //property 
    public $name;
    public $asal;

    //constructor
    function __construct($namaOrang, $asalOrang)  
    {
        echo "Construct otomatis dijalankan </br>";

        // mengubah value property
        $this->nama = $namaOrang;
        $this->asal = $asalOrang;
    }


    // destructor
    function __destruct()
    {
        echo "Destruct jalankan terakhir";
    }
    //method 
    function kenalkan(){
        return "Halo, aku " . $this->nama . " dari " . $this->asal . " <br>";
    }
}


// instalasi orang
$obj_orang = new orang("hanif", "situbondo");
echo $obj_orang->kenalkan();
?>