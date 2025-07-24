<header>
        <img src="../../../assets/img/banner.png" style="width: 98.8vw;" alt="">

        <nav class="navbar navbar-expand-lg" style="background-color: #080808; padding: 5px;">
            <div class="container-fluid">
                <img src="../../../assets/img/gralha_pousandoparada.png" alt="" style="position: absolute; width: 10%; left: 0; bottom: 30%;
                 margin: 0">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../avisos/index.php"
                                style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../objetivos/index.php" style="color: white;">OBJETIVOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../fotos/index.php" style="color: white;">FOTOS</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="https://jogosdigitaisifpr.github.io/meros2D" style="color: white;">JOGO OPRQ</a> -->
                            <a class="nav-link" href="../jogo/index.php" style="color: white;">JOGO OPRQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../locaisDeProva/index.php" style="color: white;">LOCAIS DE
                                PROVA</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: white;">
                                EDIÇÕES ANTERIORES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../edicoes/index.php">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2024</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: white;">
                                PROVAS ANTERIORES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../provas/index.php">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2024</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <button class="btn me-md-2" style="background-color: #0e83e4; color: white;"
                    type="button">INSCREVA-SE</button>
                    <?php if ($_SESSION["usuario"] == "adm"){
                        echo '<a class="btn me-md-2" href="../login/logout.php" style="background-color: #0e83e4; color: white;"
                        type="button">LOGOUT</a>';
                    }
                    ?>
            </div>

        </nav>

    </header>
