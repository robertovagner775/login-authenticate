<?php 

namespace app\utils;

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('app\controller');

SimpleRouter::get('login-authenticate/', 'loginController@index');

SimpleRouter::get('login-authenticate/registrar-se/', 'registrarController@index');

SimpleRouter::post('login-authenticate/', 'loginController@recuperarValores');

SimpleRouter::post('login-authenticate/registrar-se/', 'registrarController@recuperarValores');

SimpleRouter::get('login-authenticate/confirmar_email/{purl}', 'registrarController@confirmar_email');

SimpleRouter::get('login-authenticate/home/', 'homeController@index');

SimpleRouter::get('login-authenticate/confirmar_email/', 'registrarController@confirmar_envio_email');

SimpleRouter::start();





?>