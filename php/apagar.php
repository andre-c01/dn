<?php
$servidor = "localhost";
$basedados = "php";
$utilizador = "daniel";
$password = "System32";

$dst = "mysql:host=$servidor; dbname=$basedados; charset=UTF8";


try {
    $conn = new PDO($dst, $utilizador, $password);
    $nome = $_POST['nome'];
        
    $sql = 'delete from utilizadores where user =:user';
    $stmt = $conn->prepare($sql);
    $stmt->execute([':user' => $nome]);
	echo "Registo apagado com sucesso!";
    // Iniciar sessão
session_start();
// remove todas as varáveis de sessão
session_unset();
// Destroi a sessão
session_destroy();
// Carrega página inicial
header("Location: ../index.php");
} catch (PDOException $err) {
    die($err);
}
?>