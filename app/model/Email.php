<?php 

namespace app\model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email {

    const HOST = 'sandbox.smtp.mailtrap.io';
    const USER = '2d1a66ab5187e5';
    const PASS = 'f865e6466f9228';
    const SECURE = 'smtp';
    const PORT = 587;
    const CHARSET = 'UTF-8';
    
    const FROM_EMAIL = 'robertovagner737@gmail.com';
    const  FROM_NAME = 'Roberto Vagner';
    private $error;


    public function setFrom($email, $user){
        $this->from_email = $email;
        $this->from_user = $user;
    }
    
    public static function gerarHashEmail($tam_hash = 12){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($chars), 0, $tam_hash);
  
    }

    public function getFrom(){
        $user = [
            "email" => $from_email,
            "user" => $from_user
        ];

        return $user;
    }

    public function getError(){
        return $this->error;
    }

    public function confirmEmail($addresses,  $purl){

        // constroi o purl da plataforma
        $link = 'http://localhost/login-authenticate/'. 'confirmar_email/'. $purl;
        $this->error = '';

        $obMail = new PHPMailer(true);
        try{
            //CREDENCIAIS DE ACESSO 
            $obMail->isSMTP(true);
            $obMail->Host = self::HOST;
            $obMail->SMTPAuth = true;
            $obMail->Username = self::USER;
            $obMail->Password = self::PASS;
            $obMail->SMTPSecure = self::SECURE;
            $obMail->Port = self::PORT;
            $obMail->CharSet = self::CHARSET;

            //REMETENTE
            $obMail->setFrom(self::FROM_EMAIL, self::FROM_NAME);
            
            $addresses = is_array($addresses) ? $addresses : [$addresses];
            foreach($addresses as $address){
                $obMail->addAddress($address);
            }

            $obMail->isHTML(true);
            $obMail->Subject = "confirmação de e-mail ná plataforma";
            $html = '<p> Seja bem vindo a plataforma  </p>';
            $html .= '<p> para continuar com o cadastro em nossa plataforma aperte no link abaixo.  </p>';
            $html .= '<a href="'.$link.'">Confirmar E-mail</a>';
            $obMail->Body = $html;

           return  $obMail->send();

           
        }catch(PHPMailerException $e){
            $this->error = $e->getMessage();
            
        }

           

    }



    

    public function sendEmail($addresses, $subject, $body, $attatchments = [], $ccs = [], $bccs = []){

        $this->error = '';

        $obMail = new PHPMailer(true);
        try{
            //CREDENCIAIS DE ACESSO 
            $obMail->isSMTP(true);
            $obMail->Host = self::HOST;
            $obMail->SMTPAuth = true;
            $obMail->Username = self::USER;
            $obMail->Password = self::PASS;
            $obMail->SMTPSecure = self::SECURE;
            $obMail->Port = self::PORT;
            $obMail->CharSet = self::CHARSET;

            //REMETENTE
            $obMail->setFrom(self::FROM_EMAIL, self::FROM_NAME);
            
            $addresses = is_array($addresses) ? $addresses : [$addresses];
            foreach($addresses as $address){
                $obMail->addAddress($address);
            }

            $attatchments = is_array($attatchments) ? $attatchments : [$attatchments];
            foreach($attatchments as $attatchment){
                $obMail->addAttatchment($attatchment);
            }

            $bccs = is_array($bccs) ? $bccs : [$bccs];
            foreach($bccs as $bcc){
                $obMail->addBCC($bcc);
            }

            //conteudo
            $obMail->isHTML(true);
            $obMail->Subject = $subject;
            $obMail->Body = $body;

            return $obMail->send();


        }catch(PHPMailerException $e){
            $this->error = $e->getMessage();

        }

    }
}