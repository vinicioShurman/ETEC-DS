<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Teste.php" method="post">
        <div>
            <label for="nome">Valor 1:</label>
            <input type="text" id="valor1" name="valor1"/>
        </div>
        <div>
            <label for="email">Valor 2:</label>
            <input type="text" id="valor2" name="valor2"/>
        </div>
        <div class="buttonSoma">
            <button type="submit" name="operacao" value="soma">
                Soma
            </button>
        </div>
        <div class="buttonSubtracao">
            <button type="submit" name="operacao" value="subtracao">
                Subtração
            </button>
        </div>
        <div class="buttonDivisão">
            <button type="submit" name="operacao" value="divisao">
                Divisão
            </button>
        </div>
        <div class="buttonMultiplicacao">
            <button type="submit" name="operacao" value="multiplicacao">
                Multiplicação
            </button>
        </div>
        <div class="buttonExponenciacao">
            <button type="submit" name="operacao" value="exponenciacao">
                Exponenciação
            </button>
        </div>
    </form>
</body>
</html>