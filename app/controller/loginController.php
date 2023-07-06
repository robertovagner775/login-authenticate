<?php

namespace app\controller;

use app\controller\htmlController;
use app\model\Usuario;

class loginController extends htmlController {


    
    public function index(){

       echo $this->render("login.php", ['titulo' => 'Tela de Login']);
    }


    // recuperar valores do formulario de login e verifica se existe no banco de dados atraves da model
    // retorno type boolean
    public function recuperarValores(){
        if(!empty($_POST['form-login'])){
            $formValues = [            
                "Senha" => $_POST['txtSenha'],
                "email" => $_POST['txtEmail']
            ];

            return Usuario::verificaUsuario($_POST['txtSenha'], $_POST['txtEmail']);
        }
        

    }
}





?>