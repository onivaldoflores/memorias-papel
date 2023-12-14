<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memórias no Papel</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!--LINKS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- CSS BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="estilo/estilo.css">

    <!--SCRIPTS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- TOPO -->
    <?php
        require_once('header.php');
    ?>
    <!------------------------>

    <div class="container bg-body-secondary">
        <main>
            <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <h1 class="fw-bold mb-0 fs-3">Entrar</h1>
                            
                        </div>

                        <div class="modal-body p-5 pt-0">
                            <form action="" method="" class="">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@examplo.com">
                                    <label for="floatingInput">E-mail</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Senha">
                                    <label for="floatingPassword">Senha</label>
                                </div>
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Entrar</button>
                                <small class="text-body-secondary"><a href="" class="nav-item">Esqueci minha senha!</a></small>
                                <hr class="my-4">
                                <small class="text-body-secondary">Ou entre usando sua conta Google</small>
                                <button class="w-100 py-2 mb-2 mt-2 btn btn-outline-secondary rounded-3" type="submit">
                                    <i class='bx bxl-google fs-5'></i>
                                    Entrar com Google
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
    </div>

    <!-----RODAPÉ ------->
    <?php
        require_once('footer.php');
    ?>
    <!------------------->


    <!-- BOX ICONS JS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>