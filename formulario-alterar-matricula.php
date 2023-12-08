<?php
include("header.php");
include("funcoes.php");
include("conexao.php");

$id = $_GET['id'];

$estudante = buscaMatricula($conexao, $id);
?>

<div class="container text-center">
    <h1 class="text-center mt-5">Alterar Matricula</h1>
    <div class="row text-center">
    	<div class="col-md-3"></div>
    	<div class="col-md-6">
    		<form method="post" action="altera-matricula.php">

    		<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">ID do Estudante</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ID do estudante" name="estudante_id" value="<?php echo $estudante['estudante_id'];?>">
				</div>

				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">ID do Curso</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ID do curso" name="curso_id" value="<?php echo $estudante['curso_id'];?>">
				</div>

				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Data da Matricula</label>
				  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Data da matricula" name="data_matricula" value="<?php echo $estudante['data_matricula'];?>">
				</div>

				<input type="hidden" name="id" value="<?php echo $estudante['matricula_id'];?>">
				<div class="mb-3">
				  <input class="btn btn-primary" type="submit" value="Alterar">
				</div>
    			
    		</form>
    	</div>
    	<div class="col-md-3"></div>
    </div>

</div>

<div class="container-fluid mt-5 text-center">
  <a class="btn btn-primary mt-15 text-center" href="lista-estudante.php">Voltar</a>
    </div>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
</div>
