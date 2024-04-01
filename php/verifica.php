<?php

$servidor = "localhost";
$basedados = "php";
$utilizador = "daniel";
$password = "System32";
$dst = "mysql:host=$servidor; dbname=$basedados; charset=UTF8";

try {
    // Cria ligacao
    $conn = new PDO($dst, $utilizador, $password);

    $nome = $_POST['nome'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilizadores where user='$nome' and passwd='$password'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if ($row = $stmt->fetch()) {

        // Iniciar sessão
        session_start();
        // Define variaveis de sessão
        $_SESSION["username"] = $nome;
        // Carrega página inicial
        header("Location: /");
        die();

    } else {

        echo "Utilizador ou password inválida!<br>";
        header("Location: /");
        die();

    }

} catch (PDOException $err) {
    die("A ligação ao servidor $servidor falhou com o erro: " . $err->getMessage());
}
