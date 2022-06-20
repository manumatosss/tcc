<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<H1>RESULTADO</H1>

<?php

$personagem = $_GET["personagem"];
$livro = $_GET["livro"];


if ($personagem == $livro ) {
    echo 

    "Parabéns, você acertou!!";
}
else {
    echo "Você errou, tente novamente!";}
?>
<style>

body {
    background-color:FFC0CB;
    font-size:12pt;
    color: #292522; 
}

</style>
    
</body>
</html>