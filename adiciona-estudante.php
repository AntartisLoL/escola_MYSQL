<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];

if(inserirEstudante($conexao, $nome, $data_nascimento, $endereco)){
?>
<div class="container mt-5">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Estudante adicionado com sucesso!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>

<?php
}else{
	?>
<div class="container-fluid mt-5">
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Estudante não foi adicionado. Favor tentar novamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>

	<?php
}

mysqli_close($conexao);
?>
<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="formulario-estudante.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
