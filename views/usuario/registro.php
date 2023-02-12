<div class="tituloContainer">
<h1>REGRISTRATE</h1>
</div>

<?php
if(isset($_SESSION['register']) && $_SESSION['register']=='complete'): ?>
    <strong class="alert_green">Registro completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=='failed'): ?>
    <strong class="alert_red">Registro Fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register');?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" class="formulario" name="nombre" required/>

    <label for="apellidos">Apellido</label>
    <input type="text" class="formulario" name="apellidos" required/>

    <label for="email">Email</label>
    <input type="email" class="formulario" name="email" required/>
  
    <label for="password">Contraseña</label>
    <input type="password" class="formulario" name="password" required/>
    
    <input type="submit" class="inputButton"value="REGISTRATE"/>
</form>