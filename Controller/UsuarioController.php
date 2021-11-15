<?php
if(!isset($_SESSION))
 {
 session_start();
 }
class UsuarioController{


    public function inserir($nome, $cpf, $email,$senha) {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
    //return $usuario->getNome();
        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    


    if(!isset($_SESSION))
        {
        session_start();
        }
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

    public function inserirBD($id, $nome, $cpf, $email, $dataNascimento) {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setId($id);
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setDataNascimento($dataNascimento);
        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }


    public function login($cpf, $senha) {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->carregarUsuario($cpf);
        if($usuario->getSenha() == $senha)
        {
        $_SESSION['Usuario'] = serialize($usuario);
        return true;
        }
        else
        {
        return false;
        }
    }
}


?>