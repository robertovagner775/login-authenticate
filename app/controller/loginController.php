<?php

namespace app\controller;

use app\controller\htmlController;
use app\model\Usuario;

class loginController extends htmlController {


    
    public function index($log = true){
        if($log){
            echo $this->render("login.php", ['titulo' => 'Tela de Login',
            'error-login' => '']);
        } else {
            echo $this->render("login.php", ['titulo' => 'Tela de Login',
                                    'error-login' => 'usuario não encontrado']);
        }
    }

    


    // recuperar valores do formulario de login e verifica se existe no banco de dados atraves da model
    // retorno type boolean
    public function recuperarValores(){
        if(!isset($_POST['form-login'])){
            $formValues = [            
                "Senha" => $_POST['txtSenha'],
                "email" => $_POST['txtEmail']
            ];
            $log = Usuario::verificaUsuario($formValues["email"], $formValues["Senha"]);
            loginController::index($log);
        }
        

    }
 
}





?>