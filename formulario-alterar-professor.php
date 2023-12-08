<?php
include("header.php");
include("funcoes.php");
include("conexao.php");
$id = $_GET['id'];
$estudante = buscaProfessor($conexao, $id);

?>
<div class="container text-center">
    <h1 class="text-center mt-5">Alterar Professor</h1>
    <div class="row text-center">
    	<div class="col-md-3"></div>
    	<div class="col-md-6">
    		<form method="post" action="altera-professor.php">
    			<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Nome</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do aluno" name="nome" value="<?php echo $estudante['nome'];?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $estudante['professor_id'];?>">
				<div class="mb-3">
				  <input class="btn btn-primary" type="submit" value="Alterar">
				</div>
    			
    		</form>
    	</div>
    	<div class="col-md-3"></div>
    </div>

</div>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="lista-professor.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
