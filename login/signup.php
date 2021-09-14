<?php
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Su cuenta fue creada con éxito';
    } else {
        $message = "Lo siento,se produjo un error al crear su cuenta";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registrate</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>



        <?php if (!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>

        <h1>Registrate</h1>
        <span>or <a href="login.php">Login</a></span>

        <form action="signup.php" method="POST">
            <input name="email" type="text" placeholder="Ingrese un correo electronico">
            <input name="password" type="password" placeholder="Ingrese una contraseña">
            <input name="confirm_password" type="password" placeholder="confirme su contraseña">
            <input type="submit" value="Registar">
        </form>

    </body>
</html>
