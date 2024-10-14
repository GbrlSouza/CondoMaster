<?php
// Conexão com o banco de dados
$servername = "sql309.infinityfree.com";
$username = "if0_37492194";
$password = "H9e8s3w2";
$dbname = "if0_37492194_XXX";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obter dados do formulário
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data = $_POST['data'];

// Inserir no banco de dados
$sql = "INSERT INTO gestao_financeira (descricao, valor, data) VALUES ('$descricao', '$valor', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
