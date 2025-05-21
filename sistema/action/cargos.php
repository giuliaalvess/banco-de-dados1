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
        $sql = "DELETE FROM cargos WHERE CargoID = ".$id;
        mysqli_query($conn,$sql);
   
        break;
   
    case 'salvar':
 
        $nome = $_POST['nomeCargo'];
        $tetosalarial = $_POST['tetoSalarial'];
       
        #validação se o ID foi informado, declarado e numerico
        if ( isset($id) && !empty($id) && is_numeric($id)) {
            $sql = "UPDATE cargos SET Nome = '$nome', TetoSalarial = $tetosalarial WHERE CargoID = $id;";
            mysqli_query($conn,$sql); 
            
        }
        else{
            $sql = "INSERT INTO cargos (Nome,TetoSalarial) VALUE('$nome',$tetosalarial);";
            mysqli_query($conn,$sql);
            
        }
        break;
 
 
    default:
        # code...
        break;
}
header('Location: ../lista-cargos.php');
?>
 