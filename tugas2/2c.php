<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .flex{
            display: flex;
        }
        
        .block{
            background-color: aquamarine;
            width: 50px;
            height: 50px;
            border: 3px solid;
            text-align: center;
        }

        .p{
            margin-top: 25px;
        }


    </style>
</head>
<body>
    <?php
    echo '<div class="wrapper">';
    for ($i = 0; $i < 25; $i++) {
        if ($i %2 == 0) {
            echo '<div class="hitam"></div>';
        } else {
            echo '<div class="putih"></div>';
        }
    }
    echo '</div>';
    ?>
</body>
</html>