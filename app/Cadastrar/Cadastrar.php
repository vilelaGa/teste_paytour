<?php


namespace App\Cadastrar;

use App\DbConnect\DbConnect;
use App\EnviarEmail\EnviarEmail;

class Cadastrar
{
    // public $nomeMaterial;
    public $nome;
    public $email;
    public $telefone;
    public $cargo;
    public $escolaridade;
    public $obs;
    public $arquivo;


    /**
     * Função de upload de arquivos
     * @param 1
     * @var string $post que vem do form
     */
    public function upload($post)
    {
        // var_dump($post);
        // die();
        $url = URL_BASE;
        $file = $post;
        $name = $file['name'];
        $tmp = $file['tmp_name'];

        // echo $tmp;
        // die();
        $_UP['pasta'] = 'upload/';

        $extensions = "vnd.openxmlformats-officedocument.wordprocessingml.document|pdf|msword";
        $ext = pathinfo($name, PATHINFO_EXTENSION);

        if (!preg_match("/application\/($extensions)/", $file['type'])) {
            $_SESSION['Arquivo-invalido'] = true;
            header("location: $url/");
        } else {
            $novoArquivo =  uniqid() . "." . $ext;
            move_uploaded_file($tmp, $_UP['pasta'] . $novoArquivo);
            EnviarEmail::EnviarCadastro($this->email, $this->nome, $this->telefone, $this->cargo, $this->escolaridade);
            session_start();
            $_SESSION['envio'] = true;
            return $novoArquivo;
        }
    }

    /**
     * Função que cadastra o material do banco
     */
    public function cadastrar()
    {

        // $returnNovoArquivo = $this->upload($this->arquivo);

        date_default_timezone_set('America/Sao_Paulo');

        $obDados = (new DbConnect('candidato'));

        $obDados->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'cargo' => $this->cargo,
            'escolaridade' => $this->escolaridade,
            'obs' => $this->obs,
            'arquivo' => $returnNovoArquivo = $this->upload($this->arquivo),
            'ip_user' => $_SERVER["REMOTE_ADDR"],
            'data_time' => date('Y-m-d H:i:s')
        ]);

        // EnviarEmail::EnviarCadastro($this->email, $this->nome);

        $url = URL_BASE;
        header("Location: $url/");
    }
}
