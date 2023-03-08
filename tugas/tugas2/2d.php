<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .wrap {
        width: 500px;
        height: 500px;
    }

    .hitam {
        width: 100px;
        height: 100px;
        display: inline-block;
        margin-top: -5px;
        background-color: black;
    }

    .putih{
        width: 100px;
        height: 100px;
        margin-top: -5px;
        border: 1.2px solid;
        box-sizing: border-box;
        background-color: white;
        display: inline-block;
    }
    </style>
</head>
<body>

<?php
echo "<div class='wrap'>";
for ($x = 0; $x < 25; $x++) {
    if ($x %2 == 0) {
        echo "<div class='hitam'></div>";
    } else {
        echo "<div class='putih'></div>";
    }
}
echo "</div>";
?>

</body>
</html>