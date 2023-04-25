<?php 
//Variable scope /lingkup variable
$x = 10;

function tampilX () {
    global $x;
    echo $x;
}

tampilX();
echo "<br>";
?>


<?php 
//SUPERGLOBALS
//Variable milik php (yang sudah disedian oleh php)
//Merupakan array asosiative
var_dump($_GET);
echo "<br>";
echo $_SERVER["SERVER_NAME"];

?>

