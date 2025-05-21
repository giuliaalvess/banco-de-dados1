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
        $sql = "DELETE FROM produtos WHERE ProdutoID = ".$id;
        mysqli_query($conn,$sql);
        break;
    case 'salvar':
        $nome = $_POST['nomeProduto'];
            $categoria = $_POST['nomeCategoria'];
            $preco = $_POST['valorPreco'];

        //validação se o ID fo informado, declarado e numerico
        if (isset($id) && !empty($id) && is_numeric($id)){ //!empty id nao vazio (!)=nao
            $sql = "UPDATE INTO (nomeProduto, nomeCategoria, valorPreco) VALUE('$nome','$categoria', $preco);";
            mysqli_query($conn,$sql);
        }else {
             $sql = "INSERT INTO (nomeProduto, nomeCategoria, valorPreco) VALUE('$nome','$categoria', $preco);";
            mysqli_query($conn,$sql);
        }
        break;

    default:
        # code...
        break;
}
header('Location: ../lista-cargos.php');
?>