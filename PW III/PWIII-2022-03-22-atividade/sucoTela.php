<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suco</h1>
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
            <label for="sabor">Sabor: </label>
            <input type="text" id="sabor" name="sabor"/>
        </div>

        <div class="btn">
            <button type="submit" name="submit" value="suco">
                Cadastrar
            </button>
        </div>
    </form>
</body>
</html>