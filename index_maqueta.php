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
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    
    <!---Cabecera--->
    <header class="header">
        <div class="logo">
            <img src="assets/img/logo3.png" alt="tienda de Patines">
            <a href="index.php" title="Tienda de Patines">
                Tienda de Patines
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li href="#">Botas</li>
                <li href="#">Libre</li>
                <li href="#">Danza</li>
                <li href="#">Obligatorio</li>
                <li href="#">Inline</li>
                <li href="#">Ruedas</li>
                <li href="#">Frenos</li>
                <li href="#">Accesorios</li>

            </ul>
        </nav>  
    </header>

    
    <!---<hr>--->
        <!---Menu--->
        
    <div class="container">
        <div class="content">
        <!---Barra Lateral--->
        <aside class="lateral">
            <div id="login" class="block_aside">
                <h1>ACCEDER</h1>
                <form action="#" method="POST">
                    <label for="email">Email</label>
                    <input type="email" class="formulario" name="email"/>

                    <label for="password">Contraseña</label>
                    <input type="password" class="formulario" name="password"/>

                    <input type="submit" class="inputButton"value="ACCEDER"/>
                </form>

                <ul>
                    <li><a href="#">Mis Pedidos</a></li>
                    <li><a href="#">Administrar Pedidos</a></li>
                    <li><a href="#">Administrar Categorias</a></li>                
                </ul>   
            </div>
        </aside>

       
        <!--Contenido Central--->
        <div class="central">
            <p class="titulo">
                PRODUCTOS&nbsp;<span style="color: #EF7F3B">DESTACADOS</span>
            </p>
                <div class="product">
                <img src="assets/img/logo.png"/>
                <h2>Titulo Producto</h2>
                <p>$ precio</p>
                <a href="#" class="inputButton">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/logo.png"/>
                <h2>Titulo Producto</h2>
                <p>$ precio</p>
                <a href="#"class="inputButton">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/logo.png"/>
                <h2>Titulo Producto</h2>
                <p>$ precio</p>
                <a href="#"class="inputButton">Comprar</a>
            </div>
        </div>
        </div>
        
    </div>
    <!---Footer--->
    <footer class="footer">
            <p>&copy; <?= date('Y')?></p>
        </footer>
</body>
</html>