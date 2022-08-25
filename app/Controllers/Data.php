<?php

namespace App\Controllers;

use App\FuncoesBack\FuncoesBack;


class Data
{
    public function dataCadastro($data)
    {
        FuncoesBack::cadastro($data);
    }
}
