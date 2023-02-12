<div class="tituloContainer">
<h1>CREAR CATEGORIA</h1>
</div>

<form action="<?=base_url?>categoria/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" class="formulario" name="nombre" required/>
    
    <input type="submit" class="inputButton"value="AÑADIR"/>
</form>