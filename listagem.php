<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Listagem de veiculos</title>
    </head>
    <body>
        <?php $resultado = listar_todos_veiculos(); ?>
        <table>
            <tr>
                <th scope="column">Chave</th>
                <th scope="column">Marca</th>
                <th scope="column">Modelo</th>
                <th scope="column">Ano</th>
                <th scope="column">Placa</th>
                <th scope="column">Cor</th>
                <th scope="column">Tipo</th>
                <th scope="column"></th>
                <th scope="column"></th>
            </tr>
            <?php foreach ($resultado as $linha) { ?>
                <tr>
                    <td><?= $linha["chave"] ?></td>
                    <td><?= $linha["Marca"] ?></td>
                    <td><?= $linha["Modelo"] ?></td>
                    <td><?= $linha["Ano"] ?></td>
                    <td><?= $linha["Placa"] ?></td>
                    <td><?= $linha["Cor"] ?></td>
                    <td><?= $linha["Tipo"] ?></td>
                    <td>
                        <button type="button">
                            <a href="cadastro.php?chave=<?= $linha["chave"] ?>">Editar</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <button type="button"><a href="cadastro.php">Criar novo</a></button>
    </body>
</html>

<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>