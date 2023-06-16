<?php
if(isset($_POST['submit']))
{

    /*
    print_r('Nome: ' .$_POST['nome']);
    print_r('<br>');
    print_r('Usuario: ' .$_POST['usuario']);
    print_r('<br>');
    print_r('Email: ' .$_POST['email']);
    print_r('<br>');
    print_r('Telefone: ' .$_POST['tel']);
    print_r('<br>');
    print_r('Senha: ' .$_POST['senha']);
    print_r('<br>');
    print_r('Sexo: ' .$_POST['sexo']);
    print_r('<br>');
    */

    include_once('assets/config.php');

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    $result = mysqli_query($conexao, "INSERT INTO projectmusic.cadastro(nome,usuario,email,tel,senha,sexo) 
    VALUES('$nome','$usuario','$email','$tel','$senha','$sexo')");

}

?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.html">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required minlength="20">
                    </div>

                    <div class="input-box">
                        <label for="usuario">Usuário</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Crie um nome de usuário" required minlength="8">
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required minlength="15">
                    </div>

                    <div class="input-box">
                        <label for="tel">Celular</label>
                        <input id="tel" type="tel" name="tel" placeholder="(xx) xxxxx-xxxx" required minlength="11">
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required minlength="8">
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required minlength="8">
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="feminino" type="radio" name="sexo" value="Feminino">
                            <label for="feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="masculino" type="radio" name="sexo" value="Masculino">
                            <label for="masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="outros" type="radio" name="sexo" value="Outro">
                            <label for="outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="sexo" value="Nenhum">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="cadastro-button">
                    <input type="submit" name="submit" id="submit" value="Cadastrar"></input>
                </div>
            </form>
        </div>
    </div>
</body>

</html>