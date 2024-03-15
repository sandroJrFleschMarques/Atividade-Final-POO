<?php
require('util.php');


class Usuario
{
    public $nome;
    public $email;
    public $senha;
    public $tweets = [];

    public function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function adicionarTweet($tweets)
    {
        $this->tweets[] = $tweets;
    }

    public function listarTweets()
    {
        echo "<pre>";
        echo print_r($this->email);
        echo "<br>";
        echo print_r($this->tweets);
        echo "<pre>";
    }
}

class Tweet
{
    public $titulo;
    public $conteudo;
    public $likes = [];
    public $id;

    
    public function __construct($titulo, $conteudo)
    {


        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
        $this->id = geraId();
    }
    

    public function like($user)
    {
        $this->likes = [...$user];
    }
}
