<?php

$servidor = "localhost";
$basedados = "php";
$utilizador = "daniel";
$password = "System32";
$dst = "mysql:host=$servidor; dbname=$basedados; charset=UTF8";

try {
    $conn = new PDO($dst, $utilizador, $password);
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $sql = 'insert into utilizadores(user,passwd) values(:user,:passwd)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':user' => $nome,
        ':passwd' => $password
    ]);
    // Iniciar sessão
    session_start();
    // Define variaveis de sessão
    $_SESSION["username"] = $_POST['nome'];
    // Carrega página inicial
    header("Location: /");
    die();
    echo "Valor introduzido com sucesso!";
} catch (PDOException $err) {
    die($err);
}