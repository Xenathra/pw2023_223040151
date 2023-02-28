<?php
    $NPM = 51;
?>

<?php   
    echo 'Aku adalah angka <b>' . $NPM . '</b> <br>';
    echo 'Jika aku dikali 5, maka akan menjadi <b>' . ($NPM = $NPM * 5) . '</b> <br>';
    echo 'Jika aku dibagi 2, maka akan menjadi <b>' . ($NPM = $NPM / 2) . '</b> <br>';
    echo 'Jika aku ditambah 75, maka akan menjadi <b>' . ($NPM = $NPM+ 75) . '</b> <br>';
    echo 'Jika aku dikurang 20, maka aku sekarang menjadi <b>' . ($NPM = $NPM - 20) . '</b> <br>';
?>
<!-- ditambahin "= string" lagi biar si string nya lanjut dari yang atas -->    
<!-- simbol . concat untuk penggabung 2 string kata -->
<!-- diatas masi error jadi dikasih kurung buat memisahkan nya, karna asignment nya kebanyakan -->