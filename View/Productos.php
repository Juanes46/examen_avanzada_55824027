<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/category.php';
include '../../controllers/ControllerInventario.php';

use app\controllers\ControllerInventario;

$controller = new ControllerInventario();
$categories = $controller->queryAllCategories();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="container">

        <h1>Inventario</h1>
<form action="welcome.php" method="POST">
Nombre: <input type="text" name="Nombre"><br>
Cantidad: <input type="text" name="Cantidad"><br>
Precio Unitario: <input type="number" name="Precio"><br>
<input type="submit">
</form>

      
</body>
</html>