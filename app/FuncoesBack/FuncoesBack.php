<?php

namespace App\FuncoesBack;

use App\DbConnect\DbConnect;
use App\Cadastrar\Cadastrar;
use App\EnviarEmail\EnviarEmail;


class FuncoesBack
{
    public static function cadastro($data)
    {
        session_start();
        $url = URL_BASE;

        $nome = filter_var($data['nome'], FILTER_SANITIZE_ADD_SLASHES);
        $telefone = filter_var($data['telefone'], FILTER_SANITIZE_ADD_SLASHES);
        $cargo = filter_var($data['cargo'], FILTER_SANITIZE_ADD_SLASHES);
        $escolaridade = filter_var($data['escolaridade'], FILTER_SANITIZE_ADD_SLASHES);
        $obs = filter_var($data['obs'], FILTER_SANITIZE_ADD_SLASHES);
        $file = $_FILES['upload'];


        $telefone_replace = str_replace(array('(', '-', ')', ' '), '', $telefone);
        // echo '<pre>';
        // print_r($file);
        // echo '<pre>';
        // die();

        if (empty($nome)) {
            $_SESSION['Nome-invalido'] = true;
            header("location: $url/");
            die();
        } else if (empty($telefone) || !is_numeric($telefone_replace)) {
            $_SESSION['Telefone-invalido'] = true;
            header("location: $url/");
            die();
        } else if (empty($cargo)) {
            $_SESSION['Cargo-invalido'] = true;
            header("location: $url/");
            die();
        } else if (empty($escolaridade) || $escolaridade === 'Escolaridade') {
            $_SESSION['Escolari-invalido'] = true;
            header("location: $url/");
            die();
        } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['Email-invalido'] = true;
            header("location: $url/");
            die();
        } else {
            $email = $data['email'];
        }

        //===================================OBS====================

        $obs = empty($obs) ? null : $obs;

        //===========================FILE============================

        // !empty($file['tmp_name']) ?: $_SESSION['File-vazio'] = true;

        if ($file['size'] > 1000000) {
            $_SESSION['File-grande'] = true;
            header("location: $url/");
            die();
        } else {
            $objetoEnvi = new Cadastrar;
            $objetoEnvi->nome = $nome;
            $objetoEnvi->arquivo = $file;
            $objetoEnvi->email = $email;
            $objetoEnvi->telefone = $telefone;
            $objetoEnvi->cargo = $cargo;
            $objetoEnvi->escolaridade = $escolaridade;
            $objetoEnvi->obs = $obs;
            $objetoEnvi->cadastrar();

            EnviarEmail::EnviarCadastro($email, $nome);

        }
    }
}
