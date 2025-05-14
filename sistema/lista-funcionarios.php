<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';


$sql = "SELECT f.FuncionarioID,f.Nome, c.Nome AS Cargo, s.Nome AS Setor
        FROM funcionarios AS f
        INNER JOIN cargos AS c
        ON f.CargoID = c.CargoID
        INNER JOIN  setor AS s
        ON f.SetorID = s.SetorID;";
        $resultado = mysqli_query($conn, $sql);
?>

<main>

  <div class="container">
      <h1>Lista de Funcionários</h1>
      <a href="./salvar-funcionarios.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>Funcionario</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
            while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
          <tr>
          <td><?php echo $dado['FuncionarioID']?></td>
          <td><?php echo $dado['Nome']?></td>
          <td><?php echo $dado['Cargo']?></td>
            <td><?php echo $dado['Setor']?></td>
            <td>
              <a href="./salvar-funcionarios.php?id=<?php echo $dado['FuncionarioID']?>" class="btn btn-edit">Editar</a>
              <a href="./action/funcionarios.php?acao=excluir&id=<?php echo $dado['FuncionarioID']?>" class="btn btn-delete">Excluir</a>
            </td>
          </tr>
          <?php
            }
            ?>
        </tbody>
      </table>
    </div>

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>