<?php

include_once("./banco.php");

conexao();

$id = "";

if (array_key_exists("id", $_GET)) {

    $id = $_GET["id"];
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Coca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-itens-center mt-5">

        <?php
        if ($id != "") {

            echo "<h1 class='text-center mb-4'>Parabéns você já esta participando.\n</h1>";
            echo "<h1 class='text-center mb-4'> seu código é $id \n</h1>";
        }

        echo "<a style='text-align: center' class='text-center mb-4' href='sorteio.html' id='signupLink'>Cadastrar novamente.</a>";

        ?>

    </div>
</body>

</html>