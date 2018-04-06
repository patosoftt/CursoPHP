<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)){
$newName = $_POST['name'];
$newEmail = $_POST['email'];
$idVal = $_POST['id'];

$sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
$query = $pdo->prepare($sql);
$result = $query->execute([
        'name' => $newName,
        'email' => $newEmail,
        'id' => $idVal
]);
$nameValue = $newName;
$emailValue = $newEmail;

}else {
    $id = $_GET['id'];
    $sql = "SELECT name, email FROM users WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
}

?>
<html>
<head>
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Editar Usuario</h1>
    <a href="lista.php">Regresar</a>
    <?php
    if ($result){
        echo '<div class="alert alert-sucess">Actualizado con Exito!</div>';
    }
    ?>
    <form action="update.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?php echo $nameValue ?>">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $emailValue ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Actualizar">
    </form>
</div>
</body>
</html>