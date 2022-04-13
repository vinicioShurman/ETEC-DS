<?php
    require_once '../controller/ImovelController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
    </style>
</head>
<body>
    <h1>Imoveis:</h1>
    <hr>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Permissão</th>
                    <th><a href="cadImovel">Novo</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $imoveis = call_user_func(array('ImovelController','listar'));

                if(isset($imoveis)) {
                    foreach($imoveis as $imovel) {
                        ?>
                        <tr>
                            <td><?php echo $imovel->getEndereco(); ?></td>
                            <td><?php echo $imovel->getNQuartos(); ?></td>
                            <td><?php echo $imovel->getMetragem(); ?></td>
                            <td><?php echo $imovel->getNGaragem(); ?></td>
                            <td>
                                <a href="">Editar</a>
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>