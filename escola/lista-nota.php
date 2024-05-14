<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$estudantes = listarNota($conexao);

?>

  	<div class="container text-center">
    <h1 class="text-center mt-5">Listagem de Notas</h1>
    
    <table class="table table-bordered table-striped mt-5">
  <thead>
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Curso</th>
      <th scope="col">Estudante</th>
      <th scope="col">Nota</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($estudantes as $estudante){ ?>
    <tr>
      <td><?php echo $estudante["nota_id"]; ?></td>
      <td><?php echo $estudante["Curso"]; ?></td>
      <td><?php echo $estudante["Estudante"]; ?></td>
      <td><?php echo number_format( $estudante["Nota"], 1, '.', '')."<br>"; ?></td>

      <td><a class="btn btn-info" href="formulario-alterar-nota.php?id=<?php echo $estudante['nota_id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a></td>
      <td><a class="btn btn-danger" href="remove-nota.php?id=<?php echo $estudante['nota_id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></a></td>
    </tr>

    <?php } ?>
  </tbody>
</table>

	</div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary text-center" href="index.php">Pagina Inicial</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
