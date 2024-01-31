<?php
class Produto {
    public $nome;
    public $descricao;
    public $preco;
    public $imagem;

    function __construct($nome, $descricao, $preco, $imagem) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }
}

// Exemplo de produtos
$produtos = [
    new Produto("Produto 1", "Descrição do Produto 1", 100.00, "imagem1.jpg"),
    new Produto("Produto 2", "Descrição do Produto 2", 200.00, "imagem2.jpg"),
    // Adicione mais produtos conforme necessário
];

// Exibindo os produtos
foreach ($produtos as $produto) {
    echo "Nome: " . $produto->nome . "<br>";
    echo "Descrição: " . $produto->descricao . "<br>";
    echo "Preço: R$" . $produto->preco . "<br>";
    echo "Imagem: <img src='" . $produto->imagem . "' alt='" . $produto->nome . "'><br><br>";
}
?>
