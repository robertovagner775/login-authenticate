<?php

use app\controller\htmlController;

namespace app\controller;

class homeController extends htmlController {

    public function index(){

        echo $this->render("home.php", ['titulo' => 'Tela Principal']);
    }
}


?>