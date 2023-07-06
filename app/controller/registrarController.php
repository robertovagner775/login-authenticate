<?php

namespace app\controller;

use app\controller\htmlController;

class registrarController extends htmlController {



    public function index(){

        echo $this->render("registrar-user.php", ['titulo' => 'Tela de Cadastro']);
    }

    public function recuperarValores(){
        if(){
            $formValues = [            
                "Senha" => $_POST['txtSenha'],
                "email" => $_POST['txtEmail']
            ];
        }
        var_dump($formValues);

    }
}





?>