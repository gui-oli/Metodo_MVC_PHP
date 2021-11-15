<?php
include("./Model/OutrasFormacoes.php");

$exp = new ExperienciaProfissional();
$form = new FormacaoAcad();
$user = new Usuario();
$oter = new OutrasFormacoes();


/*--------------------------------*/
/*     inserir dados no Banco     */ 
/*--------------------------------*/
$oter -> setIdUsuario(4);
$oter -> setInicio('1956-04-02');
$oter -> setFim('2072-10-02');
$oter -> setDescricao('lampada');

$resultado = $oter-> inserirBD();

if ($resultado) {
    echo "funcionou";
} else {
    echo "deu ruim";
}

/*--------------------------------*/
/*     deletar dados no Banco     */ 
/*--------------------------------*/


 $sumir = $oter -> deletarBD(2) ;

 if ($sumir) {
    echo "funcionou";
} else {
    echo "deu ruim";
}

/*--------------------------------*/
/*     selecionar dados no Banco  */ 
/*--------------------------------*/


$r = $oter->listaDeOutrasFormacoes(4);

foreach ($r as $u){ 
    echo $u['idusuario'];
    echo '<br>';
    echo $u['inicio'];
    echo '<br>';
    echo $u['fim'];
    echo '<br>';
    echo $u['descricao'];
}






