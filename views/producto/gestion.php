<div class="tituloContainer">
<h1> Administrar Productos</h1>
</div>

<a href="<?=base_url?>producto/crear" class="inputButton button-small">Crear Producto</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto']=='complete') : ?>
    <strong class="alert_green">El producto se ha creado corrrectamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto']!='complete') : ?>
    <strong class="alert_red">Error al crear el producto</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete']=='complete') : ?>
    <strong class="alert_green">El producto se ha eliminado corrrectamente</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete']!='complete') : ?>
    <strong class="alert_red">Error al eliminar el producto</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<div class=tabla>
    <table> 
        <thead> 
            <tr> 
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>   
                <th>STOCK</th>
                <th>ACCION</th>

            </tr>
        </thead> 
        <tbody> 
            <?php while($producto=$productos->fetch_object()): ?>
                <tr>
                    <td><?=$producto->id;?></td>
                    <td><?=$producto->nombre;?></td>
                    <td>€<?=$producto->precio;?></td>     
                    <td><?=$producto->stock;?></td>
                    <td>
                        <a href="<?=base_url?>producto/editar&id=<?=$producto->id?>">
                        <span class="material-symbols-outlined">edit</span>
                        </a>
                        <a href="<?=base_url?>producto/eliminar&id=<?=$producto->id?>">
                        <span class="material-symbols-outlined">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody> 
    </table>
</div>
    