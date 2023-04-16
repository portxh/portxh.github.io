<?php
session_start();
require_once "functions/product.php";
require_once "functions/cart.php";

$pdoConnection = require_once "connection.php";

if (isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {

	if ($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
		addCart($_GET['id'], 1);
	}

	if ($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])) {
		deleteCart($_GET['id']);
	}

	if ($_GET['acao'] == 'up') {
		if (isset($_POST['prod']) && is_array($_POST['prod'])) {
			foreach ($_POST['prod'] as $id => $qtd) {
				updateCart($id, $qtd);
			}
		}
	}
	header('location: carrinho.php');
}

$resultsCarts = getContentCart($pdoConnection);
$totalCarts  = getTotalCart($pdoConnection);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMO - Doces e Bolos</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php#home">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#sobre">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#produtos">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#contatos">Contatos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="carrinho.php">Carrinho</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="bg-dark vh-100">

		<div class="container h-75 d-flex flex-column justify-content-center align-items-center">

			<?php if ($resultsCarts) : ?>
				<form action="carrinho.php?acao=up" method="post">
					<table class="table table-responsive table-strip">
						<thead>
							<tr>
								<th>Produto</th>
								<th>Peso (Kg)</th>
								<th>Preço</th>
								<th>Subtotal</th>
								<th>Ação</th>

							</tr>
						</thead>
						<tbody>
							<?php if ($resultsCarts<1) {
							echo '<h1 class="text-white">Seu Carrinho esta vazio.</h1>';
							} else{
							foreach ($resultsCarts as $result) : 
							
							
						?>
								<tr>

									<td><?php echo $result['name'] ?></td>
									<td>
										<input class="form-control" type="text" name="prod[<?php echo $result['id'] ?>]" value="<?php echo $result['quantity'] ?>" size="1" />

									</td>
									<td>R$<?php echo number_format($result['price'], 2, ',', '.') ?></td>
									<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.') ?></td>
									<td><a href="carrinho.php?acao=del&id=<?php echo $result['id'] ?>" class="btn btn-danger">Remover Produto</a></td>

								</tr>
							<?php 
						
						endforeach;} ?>
							<tr>
								<td colspan="3" class="text-right"><b>Total: </b></td>
								<td>R$<?php echo number_format($totalCarts, 2, ',', '.') ?></td>
								<td></td>
							</tr>
						</tbody>

					</table>

					<a class="btn btn-light m-2" href="index.php#produtos">Continuar Comprando</a>
					<button class="btn btn-primary m-2" type="submit">Atualizar Carrinho</button>

					<a class="btn btn-success m-2" href="https://wa.me/5511961605110?text=Gostaria%20de%20finalizar%20minha%20compra.%20Meu%20pedido:%20<?php foreach ($resultsCarts as $result) : echo $result["quantity"] . ' ' . $result["name"] . '; ';
																																						endforeach; ?>Totalizando o valor de:%20R$%20<?php echo $totalCarts; ?>">Finalizar Compra</a>

				</form>
			<?php endif ?>

		</div>


	</div>

</body>

</html>