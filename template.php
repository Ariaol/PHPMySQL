<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>
</head>
<body>
    <h1>Nova Tarefa</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                tarefa:
                <input type="text" name="nome">
            </label>
            <label for=>
                Descrição (Opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="prazo">
            </label>
            <fieldset>
                <legend>Prioridade</legend>
                <label>
                    <input type="radio" name="prioridade" value="1" checked> Baixa
                    <input type="radio" name="prioridade" value="2"> Média
                    <input type="radio" name="prioridade" value="3"> Alta
                </label>
            </fieldset>
            <label>
                Tarefa Concluída:
                <input type="checkbox" name="concluida" value="sim">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>

        <?php foreach($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo $tarefa['prazo']; ?></td>
                <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
                <td><?php echo $tarefa['concluida']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>