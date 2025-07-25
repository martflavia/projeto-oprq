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

						<?php
						if ($_SESSION["usuario"] == "adm") {
							echo '<div class="row">
							<div class="col">
							<a type="button" href="./create.php" class="btn btn-primary">Criar Objetivo</a><br>
							</div>
							</div>';
						}

						?>

						<div class="row row-cols-1 row-cols-md-2 g-4">
							<?php
							foreach ($objetivos as $objetivo) {
								echo '<div class="col">
								<div class="card">
								<center>
									<img src="images/' . $objetivo['image'] . '" class="card-img-top" alt="..." style="width: 40%">
								</center>
									<div class="card-body">
									<span class="badge rounded-pill text-bg-primary">Novo</span>
										<h5 class="card-title">' . $objetivo['titulo'] . ' </h5> 
										<p class="card-text">' . $objetivo['conteudo'] . '</p> ';

								if ($_SESSION["usuario"] == "adm") {
									echo '<div class="row">
											<div class="col-sm-2">
												<p class="card-text"><a type="button" href="./delete.php?id=' . $objetivo['id'] . '" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
												<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
												</svg></a> </p>
											</div>
											<div class="col-sm-2">
												<p class="card-text"><a type="button" href="./edit.php?id=' . $objetivo['id'] . '" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
													</svg></a></p>
											</div>
										</div>';
								}
								echo '
										
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