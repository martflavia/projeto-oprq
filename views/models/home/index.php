<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../layout/head.php'; ?>
    <style>
        
        /* #passarin {
            width: 100vw;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 90%;
            transform: translateX(-50%);
        } */

            /* *{
                overflow-x: hidden;
            } */

    </style>
</head>

<body>
    <?php include '../../layout/navbarlogged.php'; ?>
    <!-- <img src="../../../assets/img/voando-cima.gif" id="passarin" alt=""> -->
    <div class="bg-light p-5 rounded">
        <div class="container">

            <?php
            if ($_SESSION["usuario"] == "adm") {
                echo '<div class="row">
							<div class="col">
							<a type="button" href="./create.php" class="btn btn-primary">Criar Avisos</a><br>
							</div>
							</div>';
            }

            ?>

            <br>
            <div class="row">
                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">data das olimpíadas de química:</h5>
                                    <p class="card-text">A OPRQ começa amanhã</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in
                                        to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in
                                        to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in
                                        to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
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