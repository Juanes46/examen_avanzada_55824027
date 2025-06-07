<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/category.php';
include '../../controllers/categoriesController.php';

use app\controllers\CategoriesController;

$controller = new CategoriesController();
$categories = $controller->queryAllCategories();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="container">
            <h1>Categorías</h1>
        <div class="menu">
            <input type="text" >
        </div>
        <?php if (isset($_GET['result'])): ?>
            <p>
                <?= ($_GET['result'] === 'success') ? 'Operación realizada con éxito.' : 'Error al realizar la operación.' ?>
            </p>
        <?php endif; ?>

      
</body>
</html>