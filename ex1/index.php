<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pega Dados</title>
</head>
<body>
              <div class="card-header h3 font-weight-normal text-center">Digite numeros</div>
              <div class="card-body">
                      <form class=" form-signin  rounded" method="POST"  action="gerar.php"><br/>
                        <!-- INPUT QUE PASSA O NOME  -->
                        <input type="number" name="1"  class="form-control rounded-pill " placeholder="1" required="required" minlength="1" autofocus="">
                        <br/>
                        <!-- INPUT QUE PASSA ARMAZENAMENTO  -->
                        <input type="number"  name="2" class="form-control rounded-pill" placeholder="2" minlength="1" required="required">
                        <br/>
                        <!-- INPUT QUE PASSA A LEITURA DO HD -->
                        <input type="number" name="3" class="form-control rounded-pill" placeholder="3" min = "1" required="required">
                        <br/>
                        <!-- INPUT QUE PASSA A LEITURA DO HD -->
                        <input type="number" name="4" class="form-control rounded-pill" placeholder="4" min = "1" required="required">
                        <br/>

                        <input type="number" name="5" class="form-control rounded-pill" placeholder="5" minlength="1" required="required">
                        <br/>

                        <input type="number" name="6" class="form-control rounded-pill" placeholder="6" minlength="1" required="required">
                        <br/>
                    <br/><button class="btn btn-lg btn-primary btn-block mb-5" type="submit">Inserir config</button>
                </form>
              </div>
</body>
</html>