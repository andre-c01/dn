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
    echo $nome.$password;
    echo var_dump($_POST);

    $sql = 'update utilizadores 
            set passwd=:passwd
            where user=:user';

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':passwd' => $password,
        ':user' => $nome
    ]);
        header("Location: /");
        die();
    echo "Registo atualizado com sucesso!";
} catch (PDOException $err) {
    die($err);
}
?>