<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-primary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="recursos/system.png" alt="" width="50px"></a>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <h2>Cadastro de Usuário</h2>
        <p>
            Preencha as informações abaixo e clique no botão
            cadastrar para criar seu cadastro.
        </p>
        <?php
            /* VERIFICA SE EXISTE VALOR NA VAR ERRO E EXIBE NA TELA */
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            }
        ?>
        <form action="bd.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="nome" id="" placeholder="Primeiro nome" required>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="sobrenome" id="" placeholder="Sobrenome" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-10">
                    <input class="form-control" type="text" name="end" id="" placeholder="Endereço" required>
                </div>
                <div class="col-md-2">
                    <input class="form-control" type="number" name="num" id="" placeholder="Número" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <select class="form-control" name="sexo" id="" required>
                        <option value="">Selecione</option>
                        <option value="fem">Feminino</option>
                        <option value="masc">Masculino</option>
                        <option value="inderterminado">Prefiro não dizer</option>
                    </select>
                </div>
                <!-- RG -->
                <div class="col-md-3">
                    <input class="form-control" type="number" name="rg" id="" placeholder="RG" required>
                </div>
                <!-- CPF -->
                <div class="col-md-3">
                    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" required>
                </div>
                <!-- Data de nascimento -->
                <div class="col-md-3">
                    <input class="form-control" type="date" name="datanasc" id="" placeholder="Data de nascimento" required>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="email" name="email" id="" placeholder="Digite seu e-mail de usuário..." required>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="emailconf" id="" placeholder="Confirme seu e-mail de usuário..." required>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="password" name="senha" id="" placeholder="Digite sua senha...">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="senhaconf" id="" placeholder="Confirme sua senha...">
                </div>

            </div>

            <input class="btn btn-outline-dark btn-lg mt-3" type="submit" value="Cadastrar Usuário">


        </form>
    </div>

    <footer class="footer py-3 bg-dark fixed-bottom">
        <div class="container text-center">
           <p class="text-light">Todos os direitos reservados - 2023</p> 
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>