<?php 
    function urutanAngka ($angka) {
        $w = 1;
        for($x = 1; $x <= $angka; $x++){
            for($y = 1; $y <= $x; $y++){
                echo $w . " ";
                $w++;
            }
            echo "<br>";
        }
    }
    echo urutanAngka(5);
?>