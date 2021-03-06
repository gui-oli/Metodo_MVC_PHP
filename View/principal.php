<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
    /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
    .w3-sidebar {
        width: 122px;

    }

    /*Define Fonte para todas as tags listadas abaixo*/
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Montserrat", sans-serif;
    }

    .centro {
        padding-left: 24%;
    }

    .centro1 {
        text-align: center;
        padding-right: 42%;
    }
    .centro2 {
        padding-left: 5%;
    }
    </style>
</head>

<body class="w3-light-grey">


<?php

 include_once '../Controller/FormacaoAcadController.php';

 include_once '../Model/Usuario.php';
 if(!isset($_SESSION))
 {
 session_start();
 }
 
?>
value="<?php echo unserialize($_SESSION['Usuario'])->getID();?>"
value="<?php echo unserialize($_SESSION['Usuario'])->getNome();?>"
value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento();?>"
value="<?php echo unserialize($_SESSION['Usuario'])->getCPF();?>"
value="<?php echo unserialize($_SESSION['Usuario'])->getEmail();?>"
</body>

</html>
<nav class="w3-sidebar w3-bar-block w3-center w3-blue ">
    <a href="#home"
        class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hovertext-cyan w3-text-light-grey">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
    </a>
    <a href="#dPessoais"
        class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
        <i class="fa fa-address-book-o w3-xxlarge"></i>
        <p>Dados Pessoais</p>
    </a>
    <a href="#formacao"
        class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
        <i class="fa fa-mortar-board w3-xxlarge"></i>
        <p>Formação</p>
    </a>
</nav>
<div class="w3-padding-large" id="main">
</div>
<header class="w3-container w3-padding-32 w3-center " id="home">
    <h1>
        <img src="../Img/Enlatados.png" alt="Logo" class="w3-image" width="50%">
        </br>
    </h1>
    <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
    <br>
    <h1 class="w3-text-cyan">
        SISTEMA DE CURRICULOS
    </h1>
</header>
<div >
    <div class="centro ">
        <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
            <h2 class="w3-text-cyan centro1">Dados Pessoais</h2>
        </div>
        <form action="" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
            <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-user"></i>
                </div>
                <div class="w3-rest ">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text"
                        placeholder="Nome Completo" value="">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-calendar"></i>
                </div>
                <div class="w3-rest ">
                    <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-drivers-license"></i>
                </div>
                <div class="w3-rest ">
                    <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text"
                        placeholder="CPF: 33333333333" value="">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-envelope-o"></i>
                </div>
                <div class="w3-rest ">
                    <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email"
                        value="">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center centro2">
                    <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cellw3-round-large"
                        style="width: 90%;">atualizar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="centro">
        <div class="w3-padding-128 w3-content w3-text-grey " id="formacao">
            <h2 class="w3-text-cyan centro1">Formação</h2>
        </div>

        <form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
            <div class="w3-row w3-center">
                <div class="w3-col " style="width:65%;">
                    Data Inicial
                </div>
                <div class="w3-res ">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col " style="width:50%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest ">

                    <div class="w3-col" style="width:50%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section ">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
                                placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                        </div>
                    </div>

                    <div class="w3-row w3-section ">
                        <div class="w3-center">
                            <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large"
                                style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                                Buscar Formações
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="w3-container ">
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>
        </table>
    </div>





    <div class="centro">
        <div class="w3-padding-120 w3-content w3-text-grey " id="formacao">
            <h2 class="w3-text-cyan centro1">Inserir Formação</h2>
        </div>

        <form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin " style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col " style="width:65%;">
                    Data Inicial
                </div>
                <div class="w3-res ">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col " style="width:50%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:50%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section ">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                                placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas -Desenvolvimento de Páginas WEB">
                        </div>
                    </div>

                    <div class="w3-row w3-section ">
                        <div class="w3-center">
                            <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large"
                                style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                                Inserir Formação
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="w3-container ">
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue ">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>
        </table>
    </div>


    <div class="centro">
        <div class="w3-padding-127 w3-content w3-text-grey " id="formacao">
            <h2 class="w3-text-cyan centro1">Remover Formação</h2>
        </div>

        <form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin " style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col " style="width:65%;">
                    Data Inicial
                </div>
                <div class="w3-res ">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col " style="width:50%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:50%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section ">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                                placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas -Desenvolvimento de Páginas WEB">
                        </div>
                    </div>

                    <div class="w3-row w3-section ">
                        <div class="w3-center">
                            <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large"
                                style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                                Remover Formação
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="w3-container ">
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-blue">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>
        </table>
    </div>
</div>
    <div class="w3-container">
 <table class="w3-table-all w3-centered">
 <thead>
 <tr class="w3-center w3-blue">
 <th>Início</th>
 <th>Fim</th>
 <th>Descrição</th>
 <th>Apagar</th>
 </tr>
 <thead>

 <?php
  $fCon = new FormacaoAcadController();
 $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
 if($results != null)

 while($row = $results->fetch_object()) {
    echo '<tr>';
    echo '<td style="width: 10%;">'.$row->inicio.'</td>';
    echo '<td style="width: 10%;">'.$row->fim.'</td>';

    echo '<td style="width: 65%;">'.$row->descricao.'</td>';
    echo '<td style="width: 5%;">
    <form action="/Controller/Navegacao.php" method="post">
    <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
    <button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-roundlarge">
    <i class="fa fa-user-times"></i> </button></td>
    </form>';
    echo '</tr>';
    }
 ?>
 </table>

 <div class="w3-container">
<table class="w3-table-all w3-centered">
<thead>
 <tr class="w3-center w3-blue">

 <th>Início</th>
 <th>Fim</th>
 <th>Descrição</th>
 <th>Apagar</th>
 </tr>
<thead>

 <?php
 $fCon = new OutrasFormacoesController();
 $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
 if($results != null)

 while($row = $results->fetch_object()) {
 echo '<tr>';
 echo '<td style="width: 10%;">'.$row->inicio.'</td>';
 echo '<td style="width: 10%;">'.$row->fim.'</td>';
 echo '<td style="width: 65%;">'.$row->descricao.'</td>';
 echo '<td style="width: 5%;">
 <form action="/Controller/Navegacao.php" method="post">
 <input type="hidden" name="id" value="'.$row->idoutrasformacoes.'">
 <button name="btnExcluirOF" class="w3-button w3-block w3-blue w3-cell w3-round-large">
 <i class="fa fa-user-times"></i> </button></td>
 </form>';
 echo '</tr>';
 }
 ?>
</table>
</div>
 