<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$id = $_POST['id'];
$estudante_id = $_POST['estudante_id'];
$curso_id = $_POST['curso_id'];
$data_matricula = $_POST['data_matricula'];


if(alteraMatricula($conexao, $id, $estudante_id, $curso_id, $data_matricula)){
?>

<div class="container mt-5">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Matricula alterado com sucesso!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
<?php
}else{
	?>

  <div class="container mt-5">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 Matricula não foi alterada. Favor tentar novamente
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
	<?php
}

mysqli_close($conexao);
?>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="lista-estudante.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
