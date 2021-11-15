<?php
 include_once 'View/login.php';
?>
<?php
 if(isset($_POST["btnPrimeiroAcesso"]))
 {
 include_once '../View/primeiroAcesso.php';
 }
 else
 {
 include_once 'View/login.php';
 }

if(isset($_POST["btnPrimeiroAcesso"]))
 {
 include_once '../View/primeiroAcesso.php';
 }
 else{
 if(isset($_POST["btnCadastrar"]))
 {

 }
 else
 {
 include_once 'View/login.php';
 }
 }
 if(isset($_POST["btnAtualizar"]))
 {
 require_once '../Controller/UsuarioController.php';

 $uController = new UsuarioController();

 if($uController->inserirBD($_POST["txtID"], $_POST["txtNome"],$_POST["txtCPF"], $_POST["txtEmail"],date('Y-m-d', strtotime($_POST['txtData']))))
 {
 include_once '../View/atualizacaoRealizada.php';
 }
else
{
 include_once '../View/operacaoNaoRealizada.php';
 }

 }
 if(isset($_POST["btnAtualizacaoCadastro"]) || isset($_POST["btnOperacaoNRealizada"]) ||isset($_POST["btnInfInserir"]))
 {
  include_once '../View/principal.php';
 }
 
 if(isset($_POST["btnExcluirFA"]))
 {
 require_once '../Controller/FormacaoAcadController.php';
 include_once '../Model/Usuario.php';

 $fController = new FormacaoAcadController();
 if($fController->remover($_POST['id']) == true)
 {
 include_once '../View/informacaoExcluida.php';
 }
 else
 {
 include_once '../View/operacaoNaoRealizda.php';
 }

 }
 if(isset($_POST["btnPrincipal"]) || isset($_POST["btnAtualizacaoCadastro"]) || isset($_POST["btnCadRealizado"]) || isset($_POST["btnInfInserir"]) || isset($_POST["btnInfExcluir"]))
 {
 include_once '../View/principal.php';
 }

 if(isset($_POST["btnAddOF"]))
 {
  require_once '../Controller/OutrasFormacoesController.php';
  include_once '../Model/Usuario.php';
  $fController = new OutrasFormacoesController();
  if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioOF'])), date('Y-md', strtotime($_POST["txtFimOF"])), $_POST["txtDescOF"], unserialize($_SESSION['Usuario'])->getID()) != false)
   {
   include_once '../View/informacaoInserida.php';
   }
   else
   {
   include_once '../View/operacaoNaoRealizada.php';
   }
  }
  if(isset($_POST["btnExcluirOF"]))
{
 require_once '../Controller/OutrasFormacoesController.php';
 include_once '../Model/Usuario.php';
 $fController = new OutrasFormacoesController();

 if($fController->remover($_POST['id']) == true)
 {
 include_once '../View/informacaoExcluida.php';
 }
 else
 {
 include_once '../View/operacaoNaoRealizada.php';
 }
}

 ?>