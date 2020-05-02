<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="./css/main.css">
    </head>


</html>

<?php
    session_start();
    if ($_SESSION['email'] == "kbelleboni@gmail.com") {
        $path = "./";
        $diretorio = dir($path);
        $pastas = [];
        $cont = 0;
        while($arquivo = $diretorio -> read()){
            if($arquivo!="css"&&$arquivo!=".."&&$arquivo!="."&&$arquivo!="index.php"){
                echo '<div id="botao"><a href="./'.$arquivo.'">'.$arquivo.'</a></div>';
            }
        }
        $diretorio -> close(); 
    }
    else{
        header('Location: ./login/');
    }
?>
