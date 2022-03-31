<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vinho</h1>
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
            <label for="safra">Safra: </label>
            <input type="text" id="safra" name="safra"/>
        </div>
        <div>
            <label for="tipo">Tipo: </label>
            <input type="text" id="tipo" name="tipo"/>
        </div>

        <div class="btn">
            <button type="submit" name="submit" value="vinho">
                Cadastrar
            </button>
        </div>
    </form>
</body>
</html>