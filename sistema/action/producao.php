<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

// validacao
switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM producao WHERE ProducaoID = ".$id;
        mysqli_query($conn,$sql);
        break;
    case 'salvar':
            $nome = $_POST['nomeFuncionario'];
            $produto = $_POST['nomeProduto'];
            $entrega = $_POST['dataEntrega'];


        //validação se o ID fo informado, declarado e numerico
        if (isset($id) && !empty($id) && is_numeric($id)){ //!empty id nao vazio (!)=nao
             $sql = "UPDATE INTO (nomeFuncionario,nomeProduto, dataEntrega) VALUE('$nome','$produto', $entrega);";
            mysqli_query($conn,$sql);
        }else {
             $sql = "INSERT INTO (nomeFuncionario,nomeProduto, dataEntrega) VALUE('$nome','$produto', $entrega);";
            mysqli_query($conn,$sql);
        }
        break;

    default:
        # code...
        break;
}
header('Location: ../lista-cargos.php');
?>