<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$id = '';
if( isset($_GET['id']) && !empty($_GET['id'])){
  $id = $_GET['id'];
}

?>
  
  <main>

    <div id="setores" class="tela">
        <form class="crud-form" method="post" action="./action/setores.php">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="<?php echo $id;?>">

          <h2>Cadastro de Setores</h2>
          <input type="text" name="nomeSetor" placeholder="Nome do Setor">
          <input type="text" name="nomeAndar" placeholder="Andar">
          <input type="text" name="nomeCor" placeholder="Cor">
          <button type="submit">Salvar</button>
        </form>
      </div>
   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>