<?php
include("header.php");
include("funcoes.php");
include("conexao.php");
$id = $_GET['id'];
$estudante = buscaEstudantes($conexao, $id);
?>
<div class="container text-center">
    <h1 class="text-center mt-5">Alterar Estudante</h1>
    <div class="row text-center">
    	<div class="col-md-3"></div>
    	<div class="col-md-6">
    		<form method="post" action="altera-estudante.php">
    			<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Nome</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do aluno" name="nome" value="<?php echo $estudante['nome'];?>">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Data da Nascimento</label>
				  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Nome do aluno" name="data_nascimento" value="<?php echo $estudante['data_nascimento'];?>">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Endereço</label>
				  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do aluno" name="endereco" value="<?php echo $estudante['endereco'];?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $estudante['estudante_id'];?>">
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
