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
    mysqli_query($conn, $query) or die(mysqli_error($conn));  
    $id_console_content = mysqli_insert_id($conn) ;

    $query = "INSERT INTO console_content
                VALUES
                (null, '$id_console_content', '$judul','$sub_judul', '$isi')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// add artikel yg udah ada
    function add($data){
        global $conn;
        $judul = htmlspecialchars($data["judul"]);
        $sub_judul = htmlspecialchars($data["sub_judul"]);
        $isi = htmlspecialchars($data["isi"]);
        $id_console_content = htmlspecialchars($data['add']);
        $query = "INSERT INTO console_content
                    VALUES
                    (null, '$id_console_content', '$judul', '$sub_judul', '$isi')
                ";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        return [
            'error' => false,
            'id' => $id_console_content
        ];
    }

// hapus artkel
    function hapus ($id) {
        global $conn;   
        mysqli_query($conn, "DELETE FROM home_content WHERE id = $id") or die(mysqli_error($conn));

        mysqli_query($conn, "DELETE FROM console_content WHERE id = $id") or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

// edit artikel
    function edit ($data){
        global $conn;

        $pengenal = $data["id"];
        $gambar = htmlspecialchars($data["gambar"]);
        $judul = htmlspecialchars($data["judul"]);
        $teast_detail = htmlspecialchars($data["teast_detail"]);

        $query = "UPDATE home_content SET
                    gambar = '$gambar',
                    judul = '$judul',
                    teast_detail = '$teast_detail'
                WHERE id = $pengenal    
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    }


?>