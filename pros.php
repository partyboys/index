<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$array = Array (
    "0" => Array (
        "Username" => "{$user}",
        "Password" => "{$pass}"
    );
$json = json_encode(array('data' => $array));
if (file_put_contents("data.json", $json)){
    echo "File JSON sukses dibuat...";
    echo "\n\n".$json;
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}









 ?>
