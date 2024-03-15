<?php
require('./atividade-final/usuario.php');


$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['Logado'] = array();
array_push($_SESSION['Logado'], $email);
array_push($_SESSION['Logado'], $senha);

var_dump($_SESSION['Logado']);

$dados = ($_SESSION['users'][$email]);


$statusquo = false;
foreach ($dados as $key => $value) {
    if ($value->email == $email && $value->senha == $senha) {


        $statusquo = true;
        $found = $value;
        header("Location: atividade-final.php");

        die();
    }
}
if ($statusquo == false) {
    echo "Não encontrado<br>";
    echo "<a href='login.php'>Voltar para Login</a>";
    return;
}
$nome = $found->nome;
$email = $found->email;
$senha = $found->senha;

?>
<form method="POST" action="atividade-final.php">
  <input type="hidden" name="nome" value="<?php echo $nome; ?>" >
  <input type="hidden" name="email" value="<?php echo $email; ?>" >
  <input type="hidden" name="senha" value="<?php echo $senha; ?>" >
  <button>Public</button>
</form>
