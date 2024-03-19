<?php
class Tweet
{
    public $conteudo;
    public $likes = [];
    public $id;


    public function __construct($conteudo)
    {
        $this->conteudo = $conteudo;
        $this->id = $this->geraId();
    }

    private function geraId()
    {
        if (!isset($_SESSION['contador_tweets'])) {
            $_SESSION['contador_tweets'] = 1;
        }
        return $_SESSION['contador_tweets']++;
    }
}
