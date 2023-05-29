<?php 
//koneski ke database    
$conn = mysqli_connect('localhost', 'root', '' ,'tubes_pw2023');

//function query buat ngambil si data
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}


?>