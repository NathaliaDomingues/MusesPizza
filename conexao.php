<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muses Pizza</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzaria";

//criar conexão 

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome= $_POST ["sobrenome"];
    $telefone = $_POST ["telefone"];
    $endereco = $_POST ["endereco"];
    $tamanho = $_POST["tamanho"];
    $sabor = $_POST ["sabor"];
    $quantidade = $_POST ["quantidade"];

    $sql = "INSERT INTO clientes2 (nome, sobrenome, telefone, endereco) VALUES ('$nome', '$sobrenome', '$telefone', '$endereco')";
    $sql = "INSERT INTO pizzas (tamanho, sabor, quantidade) VALUES ('$tamanho', '$sabor', '$quantidade')";

    if($conn->query($sql) === true){
        echo "Pedido feito com sucesso";
    } else{
        echo "Erro" . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

</body>

</html>