<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
if (!file_exists("data.json")){
    $data [] = array(
        "userName" => "{$user}",
        "passUser" => "{$pass}"
    );
    $json1 = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json1);
    echo $json;
}else {
    $file = "data.json";
    $anggota = file_get_contents($file);
    $data = json_decode($anggota, true);
    if($_POST['user'] = $data[0]['userName']) {
        echo("Username Already Exist !!");
    }else {
        $data [] = array(
            "userName" => "{$user}",
            "passUser" => "{$pass}"
        );
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $anggota = file_put_contents($file, $jsonfile);
        if($anggota){
            echo "Berhasil";
        }
    }
}








 ?>
