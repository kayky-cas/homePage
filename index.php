  <!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="./css/main.css">
    </head>


</html>

<?php
    $path = "../";
    $diretorio = dir($path);
    $pastas = [];
    $cont = 0;
    while($arquivo = $diretorio -> read()){
        if($arquivo!="css"&&$arquivo!=".."&&$arquivo!="."){
            echo '<a href="./'.$arquivo.'">'.$arquivo.'</a>';
        }
    }
    $diretorio -> close();
?>
