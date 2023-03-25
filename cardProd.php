<!-- Conjunto de Cards/Produtos -->
<div class="d-flex flex-wrap justify-content-around">

    <!-- Card de UM Produto -->
    <?php

    // Obtendo os produtos do banco de dados
    $resultado = mysqli_query($con, "SELECT * FROM produtos");

    // Exibindo os produtos na vitrine
    while ($IdProd = mysqli_fetch_array($resultado)) {
        echo '<div class="card-deck">';
            echo '<div class="card-4">';
                
                echo '<img src="img/' . $IdProd["imagem"] . '" class="img-prod" alt="' . $IdProd["nomeProd"] . '">';
                
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $IdProd["nomeProd"] . '</h5>';
                    echo '<p class="card-text">' . $IdProd["descProd"] . '</p>';
                    echo '<p class="card-text">R$ ' . number_format($IdProd["precoProd"], 2, ',', '.') . '</p>';
                echo '</div>';
                //echo '<div class="card-footer"';
                    echo '<button type="submit" class="btn justify-content-around btn-primary">Adicionar ao Carrinho</button>';
                //echo '</div>';
            echo '</div>';
        echo '</div>';

    }

    ?>

</div>