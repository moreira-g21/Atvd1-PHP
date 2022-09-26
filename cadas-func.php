<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="cadas.php" method="post" style="width: 400px; margin: auto;">
        <fieldset>
            <p>
              <label>ID:</label>
               <input type="number" name="id">
            </p>
            <p>
              <label>Nome:</label>
               <input type="text" name="name">
            </p>
            <p>
              <label>Cargo:</label>
               <input type="text" name="carg">
            </p>
            <p>
              <label>Salário:</label>
               <input type="number" name="salar">
            </p>
            <p>
              <label>Dependentes:</label>
               <input type="number" name="depend">
            </p>
             <p><button type="submit">Cadastrar</button></p>
        </fieldset>
    </form>
</body>
</html>
