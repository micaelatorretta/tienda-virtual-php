<?php if (isset($pro)) : ?>
    

    <div class="detail-product">
        <h1><?= $pro->nombre ?></h1>
        <div class="image">
            <img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" />
        </div>

        <div class="info">
            <p><?= nl2br($pro->descripcion) ?></p>
            <h2>€ <?= $pro->precio ?></h2>
            <a href="#" class="inputButton">Comprar</a>
        </div>
    </div>

<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>