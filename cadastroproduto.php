<?php

include 'conexao.php';

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];

// Use instrução preparada para evitar injeção de SQL
$sql = "INSERT INTO produto (produto, descricao, preco, categoria, estoque) VALUES ('$produto','$descricao','$preco','$categoria','estoque')";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Vincule as variáveis aos parâmetros da declaração
    mysqli_stmt_bind_param($stmt, "ssdss", $produto, $descricao, $preco, $categoria, $estoque);

    // Execute a instrução preparada
    $inserir = mysqli_stmt_execute($stmt);

    // Verifique se a execução foi bem-sucedida
    if (!$inserir) {
        die("Erro ao inserir dados: " . mysqli_error($conexao));
    }

    // Feche a instrução preparada
    mysqli_stmt_close($stmt);

    // Feche a conexão
    mysqli_close($conexao);

    header('Location: formproduto.php');
} else {
    die("Erro na preparação da consulta: " . mysqli_error($conexao));
}
?>