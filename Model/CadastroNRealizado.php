<!DOCTYPE html>
<html lang=" pt-BR ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <title>Document</title>
</head>

<body>
</body>

</html>
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-
display-middle" style="width: 30%;">
    <div class="w3-row w3-section">
        <div>
        <button name="btnCadNRealizado" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Cadastro Não Realizado</button>

        </div>
    </div>
</form>
<?php
if(isset($_POST["btnPrimeiroAcesso"]))
 {
 include_once '../View/primeiroAcesso.php';
 }
 else{
 if(isset($_POST["btnCadastrar"]))
 {
 require_once '../Controller/UsuarioController.php';
 $uController = new UsuarioController();

 if($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"],$_POST['txtSenha']))
 {
 include_once '../View/cadastroRealizado.php';
 }
 else
 {
 include_once '../View/cadastroNaoRealizado.php';
}
}
else{
if(isset($_POST["btnCadRealizado"]))
{
include_once '../View/principal.php';
}
else{
if(isset($_POST["btnCadNRealizado"]))
{
include_once '../View/primeiroAcesso.php';
}
else
{
include_once 'View/login.php';
}
}
}
}
 ?>