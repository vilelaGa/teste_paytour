<?php

namespace App\Controllers;


class Web
{
    public function home($data)
    {
        $url = URL_BASE;
        require __DIR__ . "/../../views/home.php";
    }

    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}
