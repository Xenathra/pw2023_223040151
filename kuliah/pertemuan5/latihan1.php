<?php 
//ARRAY

//Membuat array
$hari = array('senin','selasa','rabu','kamis','jumat','sabtu'); //cara lama
$bulan = ['Januari','Februari','Maret'];//cara terbaru
$myArray = ['senin',21,false];
$binatang = ['🐰','🐷','🐮','🦛','🦈'.'🐢'];

// mencetak
// mencetak 1 element array menggunakan echo
echo $binatang [1];
echo '<br>';
echo $bulan [1];

// mencetak seluruh isi array
// var_dump, print_r

var_dump($binatang);
echo '<br>';
print_r($myArray);
echo '<hr>';

// Manipulasi array
// Menggunakan index
$hari [3] = 'kamis';    //tapi ga disaranin memakai ini
printf('kamis');
echo '<hr>';

// Menambahkan elemen di akhir denang mengosongkan indexnya
$hari[] = 'Jumat';
$hari[] = 'Sabtu';

print_r('Jumat');
echo '<br>';
print_r('sabtu');
echo '<hr>';

//menambahkan elemen di akhir menggunakan array_push
array_push($bulan, 'April','Mei','Juni','Juli');
print_r($bulan);







?>
