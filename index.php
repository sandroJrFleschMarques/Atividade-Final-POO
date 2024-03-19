<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form class="tweet" action="action-users.php" method="post">
            <ul class="center">
            <h1>CADASTRAR USUARIO</h1>
                <li>
                    <label for="nome">Nome:</label>
                </li>
                <li>
                    <input type="text" name="nome" id="name" required>
                </li>

                <li> <label for="email">Email:</label>
                </li>
                <li>
                    <input type="email" name="email" id="email" required>
                </li>
                <li>
                    <label for="senha">Senha:</label>
                </li>
                <li>
                    <input type="password" name="senha" id="senha" required><br>
                </li>
                <li>
                    <button type="submit">Enviar</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>