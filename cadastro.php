<?php
$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];

//filter (segurança)
//php.net/input_filter

$nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_UNSAFE_RAW);

//#####validação#####

//foi preenchido? 
if (empty($nome)) {
    echo "O Nome deve ser preenchido.";
} elseif (strlen($nome) < 3) {
    echo "Nome inválido.";
} elseif (strlen($telefone) < 11) {
    echo "Telefone inválido.";
} elseif (strlen($nome) > 45) {
    echo "Nome inválido.";
} elseif (strlen($telefone) > 15) {
    echo "Telefone errado ou inválido.";
} else {

    require_once('banco.php');
    
    conexao();
    
    $sql = "insert into coca(nome, telefone) values('$nome','$telefone')";
    $resultado = execute($sql);

    if (!$resultado) {
        die('Falha ao inserir');
    }

    $id = busca_id();

    header("Location: /estoque?id=$id");
}
