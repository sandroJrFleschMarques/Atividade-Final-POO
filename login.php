<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form class="tweet" action="action-login.php" method="post">

            <ul>
            <h1>LOGIN</h1>
                <li>
                    <label for="email">Email:</label>
                </li>
                <li>
                    <input type="email" name="email" id="email" required>
                </li>
                <li>
                    <label for="senha">Senha:</label>
                </li>
                <li>
                    <input type="password" name="senha" id="senha" required>
                </li>
                <li>
                    <button type="submit">Enviar</button>
                </li>
                <li>
                    <a href="index.php">Novo usuario</a>
                </li>
            </ul>
        </form>
    </div>


</body>

</html>