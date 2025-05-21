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
        $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;
        mysqli_query($conn,$sql);

        break;
    case 'salvar':
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao']

        //validação se o ID fo informado, declarado e numerico
        if (isset($id) && !empty($id) && is_numeric($id)){ //!empty id nao vazio (!)=nao
            $sql = "UPDATE INTO (nome,descricao) VALUE('$nome','$descricao');";
            mysqli_query($conn,$sql);
        }else {
            $sql = "INSERT INTO (nome, descricao) VALUE('$nome','$descricao');";
            mysqli_query($conn,$sql);
        }
        break;

    default:
        # code...
        break;
}
header('Location: ../lista-categorias.php');
?>