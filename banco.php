<?php
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '123456');
define('DATABASE', 'sorteio');

$link = null;

function conexao()
{
    global $link;
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (mysqli_connect_errno()) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
}

function execute($sql)
{
    global $link;

    if ($link === null) {
        die("Erro: Conexão não estabelecida.");
    }

    $resultado = mysqli_query($link, $sql);
    if (!$resultado) {
        die("Erro na execução da query: " . mysqli_error($link));
    }

    return $resultado;
}

function busca_id()
{
    global $link;

    if ($link === null) {
        die("Erro: Conexão não estabelecida.");
    }

    $id = mysqli_insert_id($link);
    if ($id === false) {
        die("Erro ao buscar ID: " . mysqli_error($link));
    }

    return $id;
}
