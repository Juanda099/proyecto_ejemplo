<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo MVC</title>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/927caa3c92.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- ============
        Logo
        =============-->
    <div class= "container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!-- ============
        Menu
        =============-->
   <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["ruta"])):?>
                    <?php if($_GET["ruta"] == "registro"): ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=registro" class="nav-link active">Registro</a>
                        </li>    
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=registro" class="nav-link">Registro</a>
                        </li>
                    <?php endif ?> 
                <?php endif ?>
                <?php if (isset($_GET["ruta"])):?>
                    <?php if($_GET["ruta"] == "ingreso"): ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=ingreso" class="nav-link active">Ingreso</a>
                        </li>    
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=ingreso" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif ?> 
                <?php endif ?>
                <?php if (isset($_GET["ruta"])):?>
                    <?php if($_GET["ruta"] == "inicio"): ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=inicio" class="nav-link active">Inicio</a>
                        </li>    
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=inicio" class="nav-link">Inicio</a>
                        </li>
                    <?php endif ?> 
                <?php endif ?>
                <?php if (isset($_GET["ruta"])):?>
                    <?php if($_GET["ruta"] == "salir"): ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=salir" class="nav-link active">SAlir</a>
                        </li>    
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?ruta=salir" class="nav-link">Salir</a>
                        </li>
                    <?php endif ?> 

                    <?php else: ?>
                    
                        <li class="nav-item">
                            <a href="index.php?ruta=registro" class="nav-link active">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=ingreso" class="nav-link">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=inicio" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=salir" class="nav-link">Salir</a>
                        </li>

                <?php endif ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET["ruta"])) {
                if($_GET["ruta"] == "registro"||
                $_GET["ruta"] == "ingreso"||
                $_GET["ruta"] == "inicio"||
                $_GET["ruta"] == "editar"||
                $_GET["ruta"] == "salir"){
                    include "paginas/".$_GET["ruta"]. ".php";
                }else {
                    include "paginas/error404.php";
                } 

            } 
            else {
                # code...
                include "paginas/registro.php";
            }

            
            ?>
        </div>
    </div>
</body>
</html>