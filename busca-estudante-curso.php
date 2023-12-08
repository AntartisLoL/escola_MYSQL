<?php
include("header.php");
include("conexao.php");
include("funcoes.php");
$palavra = $_GET["palavra"];
$estudantes = buscaEstudantesCurso($conexao, $palavra);

?>

  	<div class="container text-center">
    <h1 class="text-center text-primary mt-5">Resultado da busca do curso</h1>
    
    <table class="table table-bordered table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Curso</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <?php foreach($estudantes as $estudante){ ?>
    <tr>
      <td><?php echo $estudante["estudantes"];?></td>
      <td><?php echo $estudante["curso"]."<br>";?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<br>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="Questão_1.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
