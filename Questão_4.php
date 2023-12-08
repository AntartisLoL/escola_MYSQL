<?php
include("conexao.php");
include("funcoes.php");
include("header.php");
$estudantes = listarCursosEstudanteMatriculado($conexao);


?>

    <div class="container text-center">
    <h1 class="text-center text-primary mt-5">Lista de Estudantes Matriculados</h1>
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
<a class="btn btn-primary" href="index.php">Pagina Inicial</a>
</div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>