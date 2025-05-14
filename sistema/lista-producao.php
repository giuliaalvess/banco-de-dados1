<?php
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
 
$sql = "SELECT
          p.ProducaoID,
          DATE_FORMAT(DataEntrega, '%d/%m/%Y') AS DataEntrega,
          DATE_FORMAT(DataProducao, '%d/%m/%Y') AS DataProducao,
          f.Nome AS NomeFuncionario,
          c.Nome AS NomeCliente,
          pd.Nome AS NomeProduto
        FROM producao as p
        INNER JOIN funcionarios as f
        ON p.FuncionarioID = f.FuncionarioID
        INNER JOIN clientes AS c
        ON p.ClienteID = c.ClienteID
        INNER JOIN  produtos AS pd
        ON p.ProdutoID = pd.ProdutoID";
 
 
$resultado = mysqli_query($conn,$sql);
 
 
?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>Producao</th>
              <th>Produto</th>
              <th>Funcionario</th>
              <th>ClienteID</th>
              <th>DataProdução</th>
              <th>DataEntrega</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php
            while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
              <td><?php echo $dado['ProducaoID']?></td>
          <td><?php echo $dado['NomeProduto']?></td>
          <td><?php echo $dado['NomeFuncionario']?></td>
          <td><?php echo $dado['NomeCliente']?></td>
          <td><?php echo $dado['DataProducao']?></td>
          <td><?php echo $dado['DataEntrega']?></td>

              <td class="botoes">
                <a href="./salvar-producao.php?id=<?php echo $dado['ProducaoID']?>" class="btn btn-edit">Editar</a>
                <a href="./action/producao.php?acao=excluir&id=<?php echo $dado['ProducaoID']?>" class="btn btn-delete">Excluir</a>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>