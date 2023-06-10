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

    // upload gambar
    $gambar = upload();
    if ( !$gambar ){
        return false;
    }
    
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

// function upload
    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yang di upload
        if( $error === 4 ) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu')
                    </script";
            return false;
        }

        // cek apakah yang diupload hanya gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower( end($ekstensiGambar) );
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
            echo "<script>
                    alert('Yang anda upload bukan GAMBAR!!')
                    </script";
            return false;
        }

        // cek jika ukuran file terlalu besar 
        if( $ukuranFile > 1000000){
            echo "<script>
                    alert('Ukuran gambar anda terlalu besar!')
                    </script";
            return false;
        }

        // lolos pengecekan, gambar siap di upload
        move_uploaded_file($tmpName, 'img/'. $namaFile);

        return $namaFile;


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

        return mysqli_affected_rows($conn);
    }

// edit artikel
    function edit ($data){
        global $conn;

        $id = $data["id"];

        $gambar = upload();
        if ( !$gambar ){
            return false;
        }
        $judul = htmlspecialchars($data["judul"]);
        $teast_detail = htmlspecialchars($data["teast_detail"]);

        $query = "UPDATE home_content SET
                    gambar = '$gambar',
                    judul = '$judul',
                    teast_detail = '$teast_detail'
                WHERE id = $id    
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
    }

    // function cari
    function cari($keyword){
        global $conn;

        $query = "SELECT * FROM home_content
                    WHERE judul LIKE '%$keyword%'
                        OR  
                        teast_detail LIKE '%$keyword%'
                ";

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
            }
                        
        return $rows;
    }

?>