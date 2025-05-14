<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_GET['acao'];

// validacao
switch ($acao) {
    case 'excluir':
        exit('Aqui vc coloca o codigo delete');
        break;
    case 'salvar':
        //validação se o ID fo informado, declarado e numerico
        if (isset($id) && !empty($id) && is_numeric($id)){ //!empty id nao vazio (!)=nao
            exit ('Aqui vc faz UPDATE');
        }else {
            exit('Aqui vc faz INSERT INTO');
        }
        break;

    default:
        # code...
        break;
}
?>