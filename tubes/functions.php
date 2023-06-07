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


//tambah artikel
function tambah ($data) {
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $sub_judul = htmlspecialchars($data["sub_judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $teast_detail = htmlspecialchars($data["teast_detail"]);

    // query insert data

    $query = "INSERT INTO home_content
                VALUES
                (null, '$gambar','$judul', '$teast_detail')
            ";
    mysqli_query($conn, $query);
    $id_console_content = mysqli_insert_id($conn) ;

    $query = "INSERT INTO console_content
                VALUES
                (null,'$id_console_content', '$judul','$sub_judul','$isi')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//tambah artikel di halaman home.view.php
// function tambah ($data) { // function ga bisa di duplicate
//     global $conn;

//     $gambar = htmlspecialchars($data["gambar"]);
//     $judul = htmlspecialchars($data["judul"]); //ganti jadi headline
//     $teast_detail = htmlspecialchars($data["teast_detail"]);

//     // query insert data
//     $query = "INSERT INTO home_content
//                 VALUES
//                 (null, '$gambar','$judul', '$teast_detail')
//             ";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }


?>