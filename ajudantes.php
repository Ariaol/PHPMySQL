<?php 

function traduz_data($data){
    if ($data == "") {
        return "";
    }

    $dados = explode("/", $data);
    
    $data_banco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    return $data_banco;
}

function data_exibir($data) {

    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $dados = explode("-", $data);

    $exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $exibir;
}

function traduz_prioridade($codigo){
    $prioridade = '';

    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    return $prioridade;
}

function traduz_concluida($concluida){

    if ($concluida == 1) {
        return 'Sim';
    }

    return 'Não';
}
?>