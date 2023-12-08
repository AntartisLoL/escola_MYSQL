<?php
include("header.php");
include("conexao.php");
include("funcoes.php");

$id = $_GET['id'];

removeCurso($conexao, $id);

?>
  <div class="container mt-5">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 Curso removido com sucesso.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>

<?php

?>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="lista-curso.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>



?>