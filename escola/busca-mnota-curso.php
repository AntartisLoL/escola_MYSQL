<?php
include("header.php");
include("conexao.php");
include("funcoes.php");
$palavra2 = $_GET["palavra"];
$estudantes = listarEstudantesMaiorNotaCurso($conexao, $palavra2);

?>

  	<div class="container text-center">
    <h1 class="text-center text-primary mt-5">Resultado da busca do curso</h1>
    
    <table class="table table-bordered table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Curso</th>
      <th scope="col">estudante</th>
      <th scope="col">NotaMaxima</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <?php foreach($estudantes as $estudante){ ?>
    <tr>
      <td><?php echo $estudante["Curso"];?></td>
      <td><?php echo $estudante["Estudante"];?></td>
      <td><?php echo number_format($estudante["NotaMaxima"], 1, '.', '')."<br>";?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
<br>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="Questão_3.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
