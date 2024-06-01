<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                tarefa:
                <input type="text" name="nome">
            </label>
            <label>
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
                <input type="checkbox" name="concluida" value="1">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
</body>
</html>