<?php

//print_r($_POST);

if ($_POST['email'] == $_POST['emailconf'] AND $_POST['senha'] == $_POST['senhaconf']) {
   /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=aulasphp','root','');

    /* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
    $sql = $pdo->prepare("INSERT INTO `usuarios` (`id`,`nome`, `sobrenome`, `endereco`, `numero`, `cidade`, `estado`, `sexo`, `rg`, `cpf`, `data`, `email`, `senha`) VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");


    /* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS*/
    $sql->execute(array($_POST['nome'],
                        $_POST['sobrenome'],
                        $_POST['end'],
                        $_POST['num'],
                        $_POST['cidade'],
                        $_POST['estado'],
                        $_POST['sexo'],
                        $_POST['rg'],
                        $_POST['cpf'],
                        $_POST['datanasc'],
                        $_POST['email'],
                        sha1($_POST['senha']),
));

//echo "Dados gravados corretamente!";
session_start();
$_SESSION['erro'] = "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>";
echo "<meta http-equiv='refresh' content='0; URL=index.php'/>";

} else {
    //echo "Usuário e senha diferentes!!";
    session_start();
    $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Usuário e senha diferentes!!</div>";
    echo "<meta http-equiv='refresh' content='0; URL=cadastro.php'/>";
}
?>

