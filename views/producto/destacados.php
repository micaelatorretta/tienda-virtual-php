        <!--Contenido Central--->
        <div class="central">
            <p class="titulo">
                PRODUCTOS&nbsp;<span style="color: #EF7F3B">DESTACADOS</span>
            </p>
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

        </div>
        </div>
        
  