<!--
- Buatlah 2 buah variabel yang menyimpan nama depan dan nama belakang kalian. 
- Buatlah program yang menampilkan deretan angka dari 1 sampai 100 secara
menurun.
- Jika sampai ke bilangan yang habis dibagi 3, ganti angkanya dengan nama depan
kalian
- Jika sampai ke bilangan yang habis dibagi 5, ganti angkanya dengan nama belakang
kalian
- Jika sampai ke bilangan yang habis dibagi 3 DAN juga habis dibagi 5, ganti angkanya
dengan nama lengkap kalian 
-->

<?php 
$front = "Adrian";
$back = "Zidan";


for ($i = 1; $i <=100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "$front $back <br>";
    } elseif ($i %3 == 0) {
        echo "$front <br>";
    } elseif ($i %5 == 0) {
        echo "$back <br>";
    } else{
        echo "$i <br>";
    }

}

?>