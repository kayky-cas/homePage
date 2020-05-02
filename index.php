<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="./css/main.css">

        <div class = "centralizar">
            <div id = "corpo">
                <header><h1 id="titulo">ADMIN ROOM</h1></header>
                <div id = "formDiv">
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
                </div>
                
                <footer></footer>
            </div>
        </div>
    </head>


</html>


