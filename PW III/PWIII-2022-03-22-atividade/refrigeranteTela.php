<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Refrigerante</h1>
    <form action="switch.php" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"/>
        </div>
        <div>
            <label for="preco">Preço: </label>
            <input type="text" id="preco" name="preco"/>
        </div>
        <div>
            <label for="retornavel">Retornavel: </label>
            <input type="text" id="sabor" name="retornavel"/>
        </div>

        <div class="btn">
            <button type="submit" name="submit" value="refrigerante">
                Cadastrar
            </button>
        </div>
    </form>
</body>
</html>