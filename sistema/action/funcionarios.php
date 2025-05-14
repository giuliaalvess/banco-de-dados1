<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];
 
// validacao
switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM funcionarios WHERE FuncionarioID = ".$id;
        mysqli_query($conn,$sql);

        break;
    case 'salvar':
        $nome = $_POST['nomeSetor'];
        $tetosalarial = $_POST['nomeAndar'];
        $tetosalarial = $_POST['nomeCor'];

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
header('Location: ../lista-funcionarios.php');
?>