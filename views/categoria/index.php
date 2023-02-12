<div class="tituloContainer">
<h1 class=""> Gestionar Categorias</h1>
</div>

<a href="<?=base_url?>categoria/crear" class="inputButton button-small">Crear Categoria</a>
<div class=tabla>
    <table> 
        <thead> 
            <tr> 
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>
        </thead> 
        <tbody> 
            <?php while($cat=$categorias->fetch_object()): ?>
                <tr>
                    <td><?=$cat->id;?></td>
                    <td><?=$cat->nombre;?></td>

                </tr>
            <?php endwhile; ?>
        </tbody> 
    </table>
</div>
    
