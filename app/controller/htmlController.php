<?php

namespace app\controller;

abstract class htmlController 
{
    public function render(String $caminho, array $dados)
    {
        extract($dados);
        ob_start();
        require __DIR__. "/../view/" . $caminho;
        $html = ob_get_clean();

        return $html;
    }
}