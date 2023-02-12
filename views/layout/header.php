<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Patines</title>
    <!--fonts--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css"/>
</head>
<body>
    
    <!---Cabecera--->
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <img src="<?=base_url?>assets/img/logo3.png" alt="tienda de Patines">
                <a href="index.php" title="Tienda de Patines">
                    Tienda de Patines
                </a>
            </div>

            <div class="navheader">
                <ul class="menulogin">
                    <li>Acceder</li>
                    <li>Registrarte</li>
                </ul>
            </div>
        </div>
        <!---MENU--->
        <?php $categorias=Utils::showCategorias(); ?>
        <nav class="nav">
            <ul>
                <?php while($cat=$categorias->fetch_object()) : ?>
                <li><a href="#"><?=$cat->nombre?></a></li>
                <?php endwhile; ?>
            </ul>
        </nav>  
    </header>

    
    <!---<hr>--->
        <!---Menu--->
        
    <div class="container">
        <div class="content">