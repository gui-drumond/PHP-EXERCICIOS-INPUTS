<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/emprestimo.css">
    <title>Biblioteca </title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark  bg-warning sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand mr-auto" href="index.php"><img class="border border-light rounded p-1" src="img/logo_essj.png"></a>
                <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarResponsive">
                    <spam class="navbar-toggler-icon"></spam>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1 class="display-4 mt-5">EXERCICIO2</h1>
        <hr>
        <form action="ex2_resposta.php" method="POST">
            <div class="form-group col-6">
                <label for="n1">Insira seu numero</label>
                <input type="number" class="form-control" name="n1" placeholder="Ex: 1">
            </div>
            <div class="form-group col-6">
                <label for="n2">Insira o segundo numero</label>
                <input type="number" class="form-control" name="n2" require="required" placeholder="Ex: 2">
            </div>
            <div class="form-group col-6">
                <label for="n3">Insira o terceiro numero</label>
                <input type="number" class="form-control" name="n3" require="required" placeholder="Ex: 3">
            </div>
            <input type="submit" name="enviar" class="btn col-2 btn-danger">
        </form>
    </div>

    <script type="text/JavaScript" src="js/bootstrap.bundle.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>