<?php
require_once '../ensure_login.php';
require_once '../navbar.php';
?>

<head>
    <title>Ventas</title>
    <link rel="stylesheet" href="/css/containers.css">
    <link rel="stylesheet" href="/css/text.css">
    <link rel="stylesheet" href="/css/buttons.css">
</head>
<div class="centered-container" style="margin-top: 10vh">
    <div class="centered-container-for-input">
            <h1 class="purple-text">Informes</h1>
        <div class="centered-flex-container">
            <a class="blue-button" href="/manager/perdidas-ganancias.php">Informe de Perdidas y Ganancias</a>
            <pre style="width: 1vw;"></pre>
            <a class="blue-button" href="/manager/informe-inventario.php">Informe de Inventario</a>
            <pre style="width: 1vw;"></pre>
            <a class="blue-button" href="/manager/cuentas-cobrar.php">Reporte Cuentas por Cobrar</a>
        </div>
    </div>
</div>