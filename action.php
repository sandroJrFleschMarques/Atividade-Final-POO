<?php
require('./atividade-final/usuario.php');


if (!session_id()) {
    // Verificando se há uma sessão, caso não tenha, será criada uma.
    session_start();
}
echo "<br>";
print_r($_SESSION['Logado'][0]);
echo "</br>";
$email = $_SESSION['Logado'][0];
$nome = $_SESSION['Logado'][1];
$senha = $_SESSION['Logado'][2];


// if(isset($_POST['nome']) && isset($_POST['email'])) {

//     $nome = $_POST['nome'];
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     $_SESSION['nome'] = $nome;
//     $_SESSION['email'] = $email;
//     $_SESSION['senha'] = $senha;

// } else {

//     $nome = $_SESSION['nome'];
//     $email = $_SESSION['email'];
//     $senha = $_SESSION['senha'];

// }

// if (!isset($_SESSION['lista'])) {
//     //Verificando se a lista já foi setada/criada (is set)
//     var_dump('Criando lista...');
//     $_SESSION['lista'] = array();
// }
// if (!isset($_SESSION[$email])) {
//     //Verificando se a lista já foi setada/criada (is set)
//     var_dump('Criando lista de '.$email);
//     $_SESSION[$email] = array();
// }




    
    $title = $_SESSION['recado-temp'][0];
    $content = $_SESSION['recado-temp'][1];

    
    $pessoa = new Usuario ($nome, $email, $senha);
    $pessoa->adicionarTweet(new Tweet($title, $content));
    // $pessoa->listarTweets();

    // array_push($_SESSION['lista'], $tweet);
    // Procurando na _SESSION e acessando a 'lista
    // para incluir $tweet
    array_push($_SESSION['users'][$email][0]->tweets, ...[new Tweet($title, $content)]);
    // Procurando na _SESSION e acessando a 'lista
    // para incluir $tweet

$_SESSION['id'][0]++;


    // echo "<a href='atividade-final.php'>Cadastrar mais</a>";
    // var_dump($_SESSION[$email]); // mostrar lista na sessão
    header("Location: atividade-final.php");

    die();
