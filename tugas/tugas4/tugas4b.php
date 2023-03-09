<?php 
$perangkat = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card' ,'SSD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
    <?php foreach ($perangkat as $p) {;?>
        <li><?= $p; ?></li>
    <?php } ?>
    </ol>

    <?php 
        $perangkat [] = 'Card Reader';
        $perangkat [] = 'Modem';
        sort($perangkat);
     ?>

    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
       <?php foreach ($perangkat as $p) {?>
        <li><?= $p; ?></li>
        <?php } ?>
    </ol>
</body>
</html>