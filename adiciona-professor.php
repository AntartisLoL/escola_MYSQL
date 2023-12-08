<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$nome = $_POST['nome'];

if(inserirProfessor($conexao, $nome)){
?>

<div class="container mt-5">
<div class="alert alert-success alert-dismissible fade show" role="alert">
   Professor adicionado com sucesso!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
}else{
	?>

<div class="container mt-5">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Professor não foi adicionado. Favor tentar novamente
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

	<?php
}
mysqli_close($conexao);
?>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="formulario-professor.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
