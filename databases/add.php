<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = MD5($_POST['password']);

    $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}

?>
<html>
<head>
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Agregar Usuario</h1>
    <a href="index.php">Home</a>
    <?php
    if ($result){
        echo '<div class="alert alert-success" role="alert">Exito!</div>';
    }
    ?>
    <form action="add.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Grabar">
    </form>
</div>
</body>
</html>