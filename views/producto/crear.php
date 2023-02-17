<?php if(isset($edit) && isset($pro) && is_object($pro)) : ?>
    <div class="tituloContainer">
    <h1>EDITAR PRODUCTO</h1>
    </div>
    <?php $url_action=base_url."producto/save&id=".$pro->id; ?>
<?php else: ?>
    <div class="tituloContainer">
    <h1>CREAR NUEVO PRODUCTO</h1>
    </div>
    <?php $url_action=base_url."producto/save"; ?>
<?php endif; ?>

<div class="formGeneral">
    <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
    <label for="Categoria">Categoria</label>
        <?php $categorias=Utils::showCategorias(); ?>
        <select name="categoria" class="formulario">
            <option disabled selected>Selecciona una opción</option>
            <?php while($cat=$categorias->fetch_object()) : ?>
                <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $cat->id==$pro->categoria_id ? 'selected' : '' ?>>
                    <?=$cat->nombre?>
                </option>
            <?php endwhile; ?>
        </select>

        <label for="nombre">Nombre</label>
        <input type="text" class="formulario" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : '' ?>" required/>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" required><?=isset($pro) && is_object($pro) ? $pro->descripcion : '' ?></textarea>

        <label for="precio">Precio</label>
        <input type="number" class="formulario-number" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : '' ?>" required/>

        <label for="stock">Stock</label>
        <input type="number" class="formulario-number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : '' ?>" required/>

        <label for="imagen">Nombre</label>
            <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
                    <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>"/>
            <?php endif; ?>
        <input type="file" class="formulario" name="imagen"/>
        
        <input type="submit" class="inputButton"value="GUARDAR"/>
    </form>
</div>