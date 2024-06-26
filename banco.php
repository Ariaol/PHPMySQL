<?php

    $bdServidor = '127.0.0.1';
    $bdUsuario = 'sistematarefa';
    $bdSenha = 'sistema';
    $bdBanco = 'tarefas';

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if (mysqli_connect_errno()) {
        echo "Problemas para conectar no banco. Erro: ";
        echo mysqli_conect_error();
        die();
    }

    function buscar_tarefas($conexao) {
        $sqlBusca = 'SELECT * FROM tarefas';
        $resultado = mysqli_query($conexao, $sqlBusca);

        $tarefas = [];

        while ($tarefa = mysqli_fetch_assoc($resultado)) {
            $tarefas[] = $tarefa;
        }

        return $tarefas;
    }

    function gravar_tarefa ($conexao, $tarefa) {

        $sqlGravar = "
            INSERT INTO tarefas
            (nome, descricao, prazo, prioridade, concluida)
            VALUES
            (
                '{$tarefa['nome']}',
                '{$tarefa['descricao']}',
                '{$tarefa['prazo']}',
                {$tarefa['prioridade']},
                {$tarefa['concluida']}
            )
            
        ";

        mysqli_query($conexao, $sqlGravar);
    }