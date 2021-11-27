<?php
class Administrador
{
   private $id;
   private $nome;
   private $cpf;
   private $senha;

   //ID
   public function setID($id)
   {
      $this->id = $id;
   }
   public function getID()
   {
      return $this->id;
   }

   //nome
   public function setNome($nome)
   {
      $this->nome = $nome;
   }
   public function getNome()
   {
      return $this->nome;
   }

   //cpf
   public function setCPF($cpf)
   {
      $this->cpf = $cpf;
   }
   public function getCPF()
   {
      return $this->cpf;
   }

   // Senha
   public function setSenha($senha)
   {
      $this->senha = $senha;
   }
   public function getSenha()
   {
      return $this->senha;
   }

   public function carregarAdministrador($cpf)
   {
      require_once 'ConexaoBD.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM administrador WHERE cpf = " . $cpf;
      $re = $conn->query($sql);
      $r = $re->fetch_object();
      if ($r != null) {
         $this->id = $r->idadministrador;
         $this->nome = $r->nome;
         $this->cpf = $r->cpf;
         $this->senha = $r->senha;
         $conn->close();
         return true;
      } else {
         $conn->close();
         return false;
      }
   }

   public function listaCadastrados()
   {
   require_once 'ConexaoBD.php';
  
   $con = new ConexaoBD();
   $conn = $con->conectar();
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   $sql = "SELECT idadministrador, nome FROM administrador;" ;
   $re = $conn->query($sql);
   $conn->close();
   return $re;
   }
  






























   /* inserir */
   public function inserirBD()
   {
      require_once 'ConexaoBD.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();

      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO usuario (nome, cpf, email, senha)
   VALUES ('" . $this->nome . "', '" . $this->cpf . "', '" . $this->email . "','" . $this->senha . "')";

      if ($conn->query($sql) === TRUE) {
         $this->id = mysqli_insert_id($conn);
         $conn->close();
         return TRUE;
      } else {
         $conn->close();
         return FALSE;
      }
   }

   /* carregar */
   public function carregarUsuario($cpf)
   {
      require_once 'ConexaoBD.php';

      $con = new ConexaoBD();
      $conn = $con->conectar();
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM usuario WHERE cpf = " . $cpf;
      $re = $conn->query($sql);
      $r = $re->fetch_object();

      if ($r != null) {
         $this->id = $r->idusuario;
         $this->nome = $r->nome;
         $this->email = $r->email;
         $this->cpf = $r->cpf;
         $this->dataNascimento = $r->dataNascimento;
         $this->senha = $r->senha;
         $conn->close();

         return true;
      } else {
         $conn->close();

         return false;
      }
   }
}
