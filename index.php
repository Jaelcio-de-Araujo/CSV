<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importando CSV</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="conteiner">
        <main class="container">
            <div class="bg-light p-5 rounded">
              <form action="processa.php" method="POST" enctype="multipart/form-data">
              <h1>Importando CSV</h1>
              <p class="lead">Selecione o arquivo .csv para importar e guardar no banco de dados.</p>
              <input class="form-control btn btn-lg btn-primary" type="file" accept=".csv" name="file"/>
              <input class="btn btn-danger" type="submit" id="file" style="margin-top: 10px;" value="Importar">
              </form>
            </div>
          </main>
    </div>
    <br>


   
</body>
</html>