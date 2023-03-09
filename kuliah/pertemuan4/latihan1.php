<?php 

$angka = 10;

function cekGenapGanjil($angka) //$angka disebut parameter
{
    if($angka % 2 == 1) {
        echo "$angka adalah bilangan GANJIL! <br>";
    } else {
        return "$angka adalah bilangan GENAP! <br>";
    }
        
}
  
echo cekGenapGanjil($angka); // argument

echo cekGenapGanjil(5); // argument

echo cekGenapGanjil(2364932); // argument
echo cekGenapGanjil(222); // argument


//GANJIL
//cek jika angka dibagi 2, sisanya 1
if($angka % 2 == 1) {
    echo "$angka adalah bilangan GANJIL!"; //false
} else {
    echo "$angka adalah bilangan GENAP! <br>"; 
} 
//hasil nya tidak ada karna false


?>