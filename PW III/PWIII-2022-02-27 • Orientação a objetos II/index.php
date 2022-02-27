<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="name" name="name"/>
        </div>
        <div>
            <label for="type">Tipo: </label>
            <input type="text" id="type" name="type"/>
        </div>
        <div>
            <label for="price">Preço: </label>
            <input type="text" id="price" name="price"/>
        </div>
        <div>
            <label for="harvest">Safra: </label>
            <input type="text" id="harvest" name="harvest"/>
        </div>

        <div class="btn">
            <button type="submit" name="register">
                Cadastrar
            </button>
        </div>
    </form>
</body>
</html>