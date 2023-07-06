<?php

namespace app\model;

use app\model\dbConn;

class Usuario {

    private $name;
    private $email;
    private $pass;

    public function teste( $email, $pass, $name)
    {
      
        $this->email = $email;
        $this->pass = $pass;
        $this->name = $name;

        $this->verificaUsuario();
    }

    private function registrarUsuario()
    {

    }

    public function verificaUsuario($email, $senha)
    {
        $query = "SELECT * FROM tbUsuaario WHERE email = $email AND senha = $senha;";
        
        return 
    }


}

?>