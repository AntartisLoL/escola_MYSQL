<?php

include("conexao.php");
include("funcoes.php");
include("header.php");

?>
    <div class="container text-center">
    <h1 class="text-center text-primary mt-5">Listar estudantes do curso</h1>
      <div class="row mt-5">
        <div class="col-md-4">
          <div>
            <form action="busca-estudante-curso.php">
              <div class="row">
                <div class="col-md-6">
                  Pequisar Curso: 
                    </div>
                      <div class="col-md-4">
                      <input class="form-control" type="text" name="palavra">
                      </div>
                    <div class="col-md-2">
                  <input class="btn btn-primary" type="submit" name="Buscar" value="Buscar">
                </div>
              </div>   
            </form>
          </div>
        </div>
      </div>
  <br>
  <a class="btn btn-primary mt-15" href="index.php">Pagina Inicial</a>
</div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>