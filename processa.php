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

    <?php
        //Recebendo o arquivo
        $arquivo = $_FILES['file']['tmp_name'];

        //Ler arquivo para o array com a função file()
        $dados = file($arquivo);
        //var_dump($dados);

        echo "<table cellpadding='10px'><tr><td><b>NOME:</b></td><td><b>IDADE:</b></td><td><b>E-MAIL:</b></td></tr></table>";
        //Percorrendo o array
        foreach ($dados as $linha)
        {

            $linha = trim($linha);
            $valor =  explode(',', $linha);
            //var_dump($valor);

            $nome   = $valor[0];
            $idade  = $valor[1];
            $email  = $valor[2];

        echo "<table cellpadding='10px'><tr><td>$nome</td><td>$idade</td><td>$email</td></tr></table>";
        }
    ?>
    <a class="btn btn-danger" type="submit" id="file" style="margin: 10px;" value="Importar" href="index.php">Voltar</a>

</body>
</html>