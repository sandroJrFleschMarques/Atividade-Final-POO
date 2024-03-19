<?php
require('tweet.php');
session_start();

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
}

function getLikesString($user)
{
    $numLikes = count($user);

    if ($numLikes === 0) {
        return "<br>";
    } else if ($numLikes === 1) {
        $firstLikerUsername = $user[array_key_first($user)];

        return "@{$firstLikerUsername} curtiu<br>";
    } else {
        $firstLikerUsername = $user[array_key_first($user)];

        return ($numLikes - 1) > 1 ? "@{$firstLikerUsername} curtiu e " . $numLikes - 1 . " outros<br>" : "@{$firstLikerUsername} curtiu e " . $numLikes - 1 . " outro<br>";
    }
}
