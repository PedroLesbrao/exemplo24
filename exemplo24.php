<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
        <div id="container">
            <?php
                echo "ESTRUTURAS CONDICIONAIS NO PHP - if<br><br>";
                $fMedia = 10;
                //if simples
                if($fMedia >= 5){
                    echo "Aluno aprovado!!!!<br><br>";
                }
                //if composto
                $fMedia = 2;
                if($fMedia >= 5){
                    echo "Aluno aprovado!!!<br><br>";
                }else{
                    echo "Aluno reprovado!!!<br><br>";
                }
            ?>
        </div>
    </body>
</html>