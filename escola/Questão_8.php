<?php
include("conexao.php");
include("funcoes.php");
include("header.php");

$estudantes = listarNotas($conexao);

?>
    <div class="container text-center">
    <h1 class="text-center text-primary mt-5">Listagem das Notas</h1>
    <table class="mt-5 table table-bordered table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Curso</th>
      <th scope="col">Estudante</th>
      <th scope="col">Notas</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <?php foreach($estudantes as $estudante){ ?>
    <tr>
      <td><?php echo $estudante["Curso"];?></td>
      <td><?php echo $estudante["Estudante"];?></td>
      <td><?php echo number_format($estudante["Nota"], 1, '.', '')."<br>";?></td>
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