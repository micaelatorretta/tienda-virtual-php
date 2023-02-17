
        <!---Barra Lateral--->
        <aside class="lateral">
            <div id="login" class="block_aside">
                <?php if(!isset($_SESSION['identity'])): ?>
                    <h1>ACCEDER</h1>
                    <form action="<?=base_url?>usuario/login" method="POST">
                        <label for="email">Email</label>
                        <input type="email" class="formulario" name="email"/>

                        <label for="password">Contraseña</label>
                        <input type="password" class="formulario" name="password"/>

                        <input type="submit" class="inputButton" value="ACCEDER"/>
                    </form>
                <?php else: ?>
                    <h1><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h1>
                <?php endif; ?>
                
                <ul>
                    <?php if(isset($_SESSION['admin'])): ?>
                        <li><a href="<?=base_url?>categoria/index">Administrar Categorias</a></li> 
                        <li><a href="<?=base_url?>producto/gestion">Administrar Productos</a></li>
                        <li><a href="#">Administrar Pedidos</a></li>   
                    <?php endif; ?>
                    <?php if(isset($_SESSION['identity'])): ?>
                        <li><a href="#">Mis Pedidos</a></li>
                        <li><a href="<?=base_url?>usuario/logout"><h3>Cerrar Sesión</h3></a></li>
                    <?php else: ?>
                        <li><a href="<?=base_url?>usuario/Registro"><h3>Registrate aquí</h3></a></li>
                    <?php endif; ?>             
                </ul>   
            </div>
        </aside>

        <!--Contenido Central--->
        <div class="central">