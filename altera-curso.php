<?php
include("header.php");
include("conexao.php");
include("funcoes.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$Professor_responsavel = $_POST['Professor_responsavel'];

if(alteraCurso($conexao, $id, $nome, $Professor_responsavel)){
?>

<div class="container mt-5">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Curso alterado com sucesso!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>

<?php
}else{
	?>

  <div class="container mt-5">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 Curso não foi alterado. Favor tentar novamente
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>

	<?php
}
mysqli_close($conexao);
?>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="lista-professor.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
