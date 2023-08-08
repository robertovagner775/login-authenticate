<?php

namespace app\controller;

use app\controller\htmlController;
use app\model\Usuario;
use app\model\Email;

class registrarController extends htmlController {



    public function index(){

        echo $this->render("registrar-user.php", ['titulo' => 'Tela de Cadastro']);
    }

    public function confirmar_envio_email(){
        echo $this->render("confirmarEmail.php", ['titulo' => 'Tela de Confirmação de E-mail']);
    }

    public function recuperarValores(){
        if(!isset($_POST['form-registrar'])){
            $formValues = [
                "username" => strip_tags($_POST['username']),            
                "pass" => strip_tags($_POST['password']),
                "email" => strip_tags($_POST['e-mail'])
            ];
        }
        
        $user = new Usuario($formValues['username'], $formValues['pass'], $formValues['email'] );
        $purl = $user->registrarUsuario();
        $email = new Email();
       
        $res = $email->confirmEmail($user->getEmail(), $purl);

        echo $res ? 'Mensagem enviada com sucesso' : $email->getError();


    }
    public  function confirmar_email($purl){

        if(strlen($purl) != 12) {
            $this->index();
            return;
        }
        
        $res = Usuario::validarEmail($purl);
        

       
    }
}





?>