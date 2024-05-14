<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$matricula_id = $_POST['matricula_id'];
$nota = $_POST['nota'];

if(inserirNota($conexao, $matricula_id, $nota)){
?>

<div class="container mt-5">
<div class="alert alert-success alert-dismissible fade show" role="alert">
 Nota registrada com sucesso!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
}else{
	?>

  <div class="container mt-5">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
Nota não foi registrada. Favor tentar novamente
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

	<?php
}
mysqli_close($conexao);
?>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="formulario-nota.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
