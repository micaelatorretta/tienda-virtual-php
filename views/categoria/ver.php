<?php if(isset($categoria)) : ?>
    <div class="tituloContainer">
        <h1><?=$categoria->nombre?></h1>
    </div>
    <?php if($productos->num_rows == 0) : ?>
        <p>No hay productos para mostrar</p>
    <?php else: ?>
        <?php while($pro=$productos->fetch_object()) : ?>
                <div class="product">
                    <a href="<?=base_url?>producto/ver&id=<?=$pro->id?>">
                        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>"/>
                        <h2><?=$pro->nombre?></h2>
                    </a>
                    <p>€ <?=$pro->precio?></p>
                    <a href="#" class="inputButton">Comprar</a>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
<?php else : ?>
   <h1>La categoría no existe </h1>
<?php endif; ?>