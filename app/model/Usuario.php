<?php

namespace app\model;


use app\model\DbConn;
use app\model\Email;
use PDO;
use app\controller\loginController;

class Usuario extends DbConn  {

   
    private $name;
    private $email;
    private $db;
    private $pass;
    CONST STATUS = 0;

    public function __construct($name, $pass, $email)
    {
        parent::__construct();
        $this->email = $email;
        $this->tratarPassword($pass);
        $this->name = $name;
      // correcao do registrar e do login colocar efetuar login caso não exista cadastrar
       
        
       
    }


    public function getEmail(){
        return $this->email;
    }

    public function registrarUsuario()
    {   
        $query = "INSERT INTO user(nome, email, senha, purl, status) VALUES (:nome, :email, :senha, :purl, :status)";
        $purl = Email::gerarHashEmail();
        $st = 0;
        

        
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(":nome", $this->name, PDO::PARAM_STR);   
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);   
        $stmt->bindParam(":senha", $this->pass, PDO::PARAM_STR);     
        $stmt->bindParam(":purl", $purl, PDO::PARAM_STR);
        $stmt->bindParam(":status", $st, PDO::PARAM_STR);
        $stmt->execute();


      

        return $purl;

    }
    


    private function tratarPassword($pass)
    {
        $senha = crypt($pass,  uniqid());
        $this->pass = $senha;
       
    }

    public function verificaUsuario($email, $senha)
    {
        $db = new Dbconn();
        $query = "SELECT * FROM user WHERE email = :email LIMIT 1";
        $prepare = $db->connection->prepare($query);
        $prepare->bindValue("email", $email);
        $prepare->execute();

        $usuario = $prepare->fetch(PDO::FETCH_ASSOC);
    
        if(!empty($usuario)){
            if(password_verify($senha, $usuario['senha']) && $usuario['purl'] == NULL){
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nome'];

                header("Location: home/");

                return true;
            } else if($usuario['status'] === 0) {
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nome'];
       
                header("Location: confirmar_email/");
                return true;
            } else {
                 return false;  
        } 
    } else {
        return false;
    }
}
    public function validarEmail($purl){
        $db = new dbConn();
        $query = "SELECT * FROM user WHERE purl = :purl";
        $prepare = $db->connection->prepare($query);
        $prepare->bindValue("purl", $purl);
        $prepare->execute();

        $usuario = $prepare->fetch(PDO::FETCH_ASSOC);
        
      
        $iduser = $usuario["id"];

        
     
        return Usuario::atualizarEmail($iduser);
      

    }

    private function atualizarEmail($id_usuario){


        $query = 'UPDATE user SET purl = NULL , status = 1 WHERE id = :id';

        $db = new dBconn();

        $prepare = $db->connection->prepare($query);
        $prepare->bindValue("id", $id_usuario );
        $prepare->execute();
        $numRow = $prepare->rowCount();

        return $numRow;

        
    }


}

?>