
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
 
       <!-- Telas CRUD -->
   <div id="cargos" class="tela">
    <form class="crud-form" action="./action/cargos.php" method="post">
      <input type="hidden" name="acao" value="salvar">
      <input type="hidden" name="id" value="<?php echo $id;?>">
     
      <h2>Cadastro de Cargos</h2>
      <label for="Nome Cargo"></label>
      <input type="text" name="nomeCargo" placeholder="Nome do Cargo">
      <input type="number" name="tetoSalarial" placeholder="Teto Salarial">
      <button type="submit">Salvar</button>
    </form>
  </div>
 
 
 
   
  </main>
 
  <?php
  // include dos arquivox
  include_once './include/footer.php';
  ?>
 
 