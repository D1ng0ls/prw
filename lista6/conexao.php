<?php 
    $hostname= "localhost";
    $port = 3306; //3306 - home | 3307 - school
    $username = "root";
    $password = "";
    $database = "lista6";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro ao conectar ao banco de dados: %s\n<br><br>", mysqli_connect_error());
        exit;
    }
?>