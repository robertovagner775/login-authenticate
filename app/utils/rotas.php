<?php 

namespace app\utils;

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('app\controller');

SimpleRouter::get('login-authenticate/', 'loginController@index');

SimpleRouter::get('login-authenticate/registrar-se/', 'registrarController@index');

SimpleRouter::post('login-authenticate/', 'loginController@recuperarValores');

SimpleRouter::start();





?>