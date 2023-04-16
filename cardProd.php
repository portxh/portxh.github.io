<div class="card-deck w-100">

    <?php
    require_once "functions/product.php";
    $pdoConnection = require_once "connection.php";
    $products = getProducts($pdoConnection);
    ?>

    <?php foreach ($products as $product) : ?>

        <div class="col-lg-4 col-md-6 col-sm-3">

            <div class="card produto m-2 bg-transparent border-0">

                <img src="" alt="">
                <img src="img/<?php echo $product['imagem']; ?>" class="card-img-top img-prod" alt="<?php echo $product['nome'];?>">


                <div class="card-body">
                    <div class="altura-card">
                        <h3 class="card-title text-center"><?php echo $product['nome'] ?></h3>
                        <p class="card-text text-center"><?php echo $product["desc"]; ?></p>
                    </div>
                </div>
                <div class="card-footer border-0 bg-transparent">
                    <p class="card-text text-center">R$<?php echo number_format($product['preco'], 2, ',', '.') ?> /kg</p>
                    <a class="btn btn-block btn-light card-link my-3" href="carrinho.php?acao=add&id=<?php echo $product['id'] ?>">Comprar</a>

                </div>
            </div>

        </div>
    <?php endforeach; ?>

</div>