<?php
if(!isset($_SESSION))
 {
 session_start();
 }
class FormacaoAcadController{


public function inserir($inicio, $fim, $descricao,$idusuario) {
 require_once '../Model/FormacaoAcad.php';
 $formacao = new FormacaoAcad();
 $formacao->setInicio($inicio);
 $formacao->setFim($fim);
 $formacao->setDescricao($descricao);
 $formacao->setIdUsuario($idusuario);
 $r = $formacao->inserirBD();

 return $r;
 }

 public function remover($id) {
    require_once '../Model/FormacaoAcad.php';
    $formacao = new FormacaoAcad();
    $r = $formacao->excluirBD($id);
    return $r;
}

 public function gerarLista($idusuario){
   require_once '../Model/FormacaoAcad.php';
   
   $formacao = new FormacaoAcad();
   $results = $formacao->listaFormacoes($idusuario);
   
   return $results;
}
    

}
    if(isset($_POST["btnAddFormacao"]))
    {
      require_once '../Controller/FormacaoAcadController.php';
      include_once '../Model/Usuario.php';
      $fController = new FormacaoAcadController();

      if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioFA'])), date('Y-m-d',strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION['Usuario'])->getID()) !=
      false)
      {
         include_once '../View/informacaoInserida.php';
      }
      else
      {
         include_once '../View/operacaoNaoRealizada.php';
      }
    }
 ?>