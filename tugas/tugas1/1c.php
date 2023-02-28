<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Tugas 1c</title>
    <style>
        .box {
            border: 3px solid black;
            background-color: aquamarine;
            width: 100px;
            height: 100px;
            text-align:  center;
        }

        h2{
            line-height: 50px;
        }

        .miring2, .miring3 {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>1</h2>
    </div>

    <div class="miring2">
        <div class="box">
            <h2>2</h2>
        </div>
        <div class="box">
            <h2>2</h2>
        </div>
    </div>
    
    <div class="miring3">
         <div class="box">
            <h2>3</h2>
         </div>
        
        <div class="box">
            <h2>3</h2>
        </div>
        <div class="box">
            <h2>3</h2>
        </div>
    </div>
</body>
</html>