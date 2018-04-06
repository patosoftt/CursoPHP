<?php
require_once 'config.php';

$consulta = $pdo->query("SELECT * FROM users");

?>

<html>
<head>
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Lista de Usuarios</h1>
    <a href="index.php">Home</a>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
            echo "<td> $fila[name] </td>";
            echo "<td> $fila[email] </td>";
            echo '<td><a href="update.php?id=' .$fila['id']. ' ">Edit</a></td>';
            echo '<td><a href="delete.php?id=' .$fila['id']. ' ">Eliminar</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

</div>
</body>
</html>