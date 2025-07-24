<?php
require_once "config.php";

$sql = "select * from tb_objetivos";

$statement = $pdo->query($sql);

$objetivos = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../../layout/head.php'; ?>
</head>

<body>
	<?php include '../../layout/navbarlogged.php'; ?>

	<div class="bg-light p-5 rounded">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="row">
							<h5>objetivos:</h5>
						</div>
						<div class="row">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam molestias explicabo
								voluptate,
								voluptatum soluta modi tempore accusantium? Iusto magni dolor similique aut, deserunt
								dolore
								modi totam pariatur est! Impedit, perspiciatis.</p>
						</div>

						<div class="row row-cols-1 row-cols-md-2 g-4">
							<?php
							foreach ($objetivos as $objetivo) {
								echo '<div class="col">
								<div class="card">
									<img src="..." class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">' . $objetivo['titulo'] . '</h5>
										<p class="card-text">' . $objetivo['conteudo'] . '</p>
									</div>
								</div>
							</div>';
							}

							?>
						</div>
					</div>
				</div>

				<?php include '../../layout/barraLateral.php'; ?>
			</div>
		</div>
	</div>

	<?php include '../../layout/footer.php'; ?>
</body>

</html>