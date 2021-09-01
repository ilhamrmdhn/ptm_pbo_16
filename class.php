<?php

class mobil{

    //methods
    function properti_mobil(){
        //object
        echo "Kaca, Spion, Ban, Merk";
    }

    function maju(){
        echo "Jalan Maju";
    }

    function mundur(){
        echo "Jalan Mundur";
    }
}

$jalan = new mobil();

echo $jalan->maju();

?>