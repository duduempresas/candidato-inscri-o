<?php
$servername = "localhost";
$username = "id22269401_formulario";
$password = "Alves874521*";
$dbname = "id22269401_formulario";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Preparar e vincular
$stmt = $conn->prepare("INSERT INTO candidatos (nome, sobrenome, telefone, endereco, numero_residencia, bairro, cidade, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// Verificar se a preparação da declaração foi bem-sucedida
if ($stmt === false) {
    die("Erro na preparação da declaração: " . $conn->error);
}

// Obter os dados do formulário e validar
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$numero_residencia = $_POST['numero_residencia'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

// Verificar se todos os campos estão preenchidos
if (empty($nome) || empty($sobrenome) || empty($telefone) || empty($endereco) || empty($numero_residencia) || empty($bairro) || empty($cidade) || empty($cep)) {
    die("Por favor, preencha todos os campos.");
}

// Vincular os parâmetros
$stmt->bind_param("ssssssss", $nome, $sobrenome, $telefone, $endereco, $numero_residencia, $bairro, $cidade, $cep);

// Executar a declaração
if ($stmt->execute()) {
    // Redirecionar para a página de confirmação
    header('Location:https://duduempresas.github.io/pagina-de-confirma-o/');
    exit();
} else {
    echo "Erro: " . $stmt->error;
}

// Fechar a declaração e a conexão
$stmt->close();
$conn->close();
?>
