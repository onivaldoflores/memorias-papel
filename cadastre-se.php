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
            <div class="container p-4">
                <form action="" method="" class="">
                    <div class="row">
                        <div class="col">
                            <h1>CADASTRE-SE</h1>
                        </div>                        
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Nome" name="nome">
                            <label for="floatingInputGrid" class="text-secondary">* Nome Completo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="email">
                            <label for="floatingInputGrid" class="text-secondary">* E-mail</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="confirmEmail">
                            <label for="floatingInputGrid" class="text-secondary">* Confirmação de E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" name="senha">
                            <label for="floatingInputGrid" class="text-secondary">* Senha</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" name="confirmSenha">
                            <label for="floatingInputGrid" class="text-secondary">* Confirmação de Senha</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col text-center">
                            <button class="mb-2 btn btn-lg rounded-3 btn-primary" type="submit"><i class='bx bx-add-to-queue'></i> CADASTRAR</button>
                            <a href="index.php" class="mb-2 btn btn-lg rounded-3 btn-primary "><i class='bx bx-undo'></i> VOLTAR</a>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col text-center">
                            <small class="text-secondary text-center">Seu e-mail será utilizado como seu login nos próximos acessos. Ao finalizar a contratação de um plano, novos dados podem ser solicitados.</small>
                            <br>
                            <small class="text-secondary text-center">*Campo com preenchimento obrigatório</small>
                        </div>
                    </div>


                    
                </form>
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