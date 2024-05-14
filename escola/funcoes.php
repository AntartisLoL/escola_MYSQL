<?php
    function buscaEstudantesCurso($conexao, $palavra){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT e.nome AS estudantes, c.nome AS curso 
        FROM estudante AS e INNER JOIN matricula AS m
        ON e.estudante_id = m.estudante_id
        INNER JOIN curso AS c ON m.curso_id = c.curso_id WHERE c.nome LIKE '%".$palavra."%'");

        while($estudante = mysqli_fetch_assoc($resultado)){
        array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function mediaEstudantesCurso($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT c.nome AS Curso, AVG(n.nota) AS MediaNotas
        FROM curso AS c
        LEFT JOIN matricula AS m ON c.curso_id = m.curso_id
        LEFT JOIN nota AS n ON m.matricula_id = n.matricula_id
        GROUP BY c.nome");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarEstudantesMaiorNotaCurso($conexao, $palavra2) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT c.nome AS Curso, e.nome AS Estudante, MAX(n.nota) AS NotaMaxima
        FROM curso AS c
        INNER JOIN matricula AS m ON c.curso_id = m.curso_id
        INNER JOIN nota AS n ON m.matricula_id = n.nota_id
        INNER JOIN estudante AS e ON m.estudante_id = e.estudante_id
        WHERE c.nome LIKE '%".$palavra2."%' GROUP BY c.nome, e.nome");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarNotas($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT c.nome AS Curso, e.nome AS Estudante, n.nota AS Nota
        FROM curso AS c
        INNER JOIN matricula AS m ON c.curso_id = m.curso_id
        INNER JOIN nota AS n ON m.matricula_id = n.nota_id
        INNER JOIN estudante AS e ON m.estudante_id = e.estudante_id
        GROUP BY c.nome, e.nome");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarCursosEstudanteMatriculado($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT e.nome as estudantes, c.nome as curso  
        from estudante as e 
        inner join matricula as m on e.estudante_id = m.estudante_id
        inner join curso as c on m.curso_id = c.curso_id");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarEstudantesNaoMatriculados($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT e.nome AS estudantes 
        FROM estudante AS e LEFT JOIN matricula
        AS m ON e.estudante_id = m.estudante_id WHERE m.matricula_id IS NULL");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function totalEstudantesMatriculadosCurso($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT c.nome AS Curso, count(m.matricula_id) AS Total_estudantes
        FROM curso AS c INNER JOIN matricula AS m 
        ON c.curso_id = m.curso_id GROUP BY c.nome");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarCursosMediaSuperior7($conexao) {
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT c.nome AS curso, avg(n.nota) AS notas
        FROM curso AS c LEFT JOIN matricula AS m
        ON c.curso_id = m.curso_id LEFT JOIN nota AS n
        ON m.matricula_id = n.matricula_id GROUP BY c.nome HAVING avg(n.nota) > 7");

        while($estudante = mysqli_fetch_assoc($resultado)) {
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarEstudantes($conexao){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT * from estudante");

        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarProfessores($conexao){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT * from professor");

        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarCurso($conexao){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT curso_id, c.nome AS Curso, p.nome AS Professor
        FROM curso AS c
        INNER JOIN Professor AS p ON c.curso_id = p.professor_id
        GROUP BY curso_id, c.nome, p.nome");

        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarMatricula($conexao){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT matricula_id, c.nome AS Curso, e.nome AS Estudante, data_matricula
        FROM curso AS c
        INNER JOIN matricula AS m ON c.curso_id = m.curso_id
        INNER JOIN estudante AS e ON m.estudante_id = e.estudante_id
        GROUP BY matricula_id, c.nome, e.nome");

        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function listarNota($conexao){
        $estudantes = array();
        $resultado = mysqli_query($conexao, "SELECT nota_id, c.nome AS Curso, e.nome AS Estudante, n.nota AS Nota
        FROM curso AS c
        INNER JOIN matricula AS m ON c.curso_id = m.curso_id
        INNER JOIN nota AS n ON m.matricula_id = n.nota_id
        INNER JOIN estudante AS e ON m.estudante_id = e.estudante_id
        GROUP BY nota_id, c.nome, e.nome");

        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($estudantes, $estudante);
        }
        return $estudantes;
    }

    function inserirEstudante($conexao, $nome, $data_nascimento, $endereco){
        $query = "INSERT INTO estudante (nome, data_nascimento, endereco) values ('{$nome}', '{$data_nascimento}', '{$endereco}')";

        return mysqli_query($conexao, $query);
    }

    function inserirProfessor($conexao, $nome){
        $query = "INSERT INTO professor (nome) values ('{$nome}')";

        return mysqli_query($conexao, $query);
    }

    function inserirCurso($conexao, $nome, $Professor_responsavel){
        $query = "INSERT INTO curso (nome, Professor_responsavel) values ('{$nome}', '{$Professor_responsavel}')";

        return mysqli_query($conexao, $query);
    }

    function inserirMatricula($conexao, $estudante_id, $curso_id, $data_matricula){
        $query = "INSERT INTO matricula (estudante_id, curso_id, data_matricula) values ('{$estudante_id}', '{$curso_id}', '{$data_matricula}')";

        return mysqli_query($conexao, $query);
    }

    function inserirNota($conexao, $matricula_id, $nota){
        $query = "INSERT INTO nota (matricula_id, nota) values ('{$matricula_id}', '{$nota}')";

        return mysqli_query($conexao, $query);
    }

    function removeEstudante($conexao, $id){
        $query = "DELETE from estudante where estudante_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function removeProfessor($conexao, $id){
        $query = "DELETE from professor where professor_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function removeCurso($conexao, $id){
        $query = "DELETE from curso where curso_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function removeMatricula($conexao, $id){
        $query = "DELETE from matricula where matricula_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function removeNota($conexao, $id){
        $query = "DELETE from nota where nota_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function buscaEstudantes($conexao, $id){
        $query = "SELECT * from estudante where estudante_id = {$id}";
        $resultado = mysqli_query($conexao, $query);

        return mysqli_fetch_assoc($resultado);
    }

    function buscaProfessor($conexao, $id){
        $query = "SELECT * from professor where professor_id = {$id}";
        $resultado = mysqli_query($conexao, $query);

        return mysqli_fetch_assoc($resultado);
    }

    function buscaCurso($conexao, $id){
        $query = "SELECT * from curso where curso_id = {$id}";
        $resultado = mysqli_query($conexao, $query);

        return mysqli_fetch_assoc($resultado);
    }

    function buscaMatricula($conexao, $id){
        $query = "SELECT * from matricula where matricula_id = {$id}";
        $resultado = mysqli_query($conexao, $query);

        return mysqli_fetch_assoc($resultado);
    }

    function buscaNota($conexao, $id){
        $query = "SELECT * from nota where nota_id = {$id}";
        $resultado = mysqli_query($conexao, $query);

        return mysqli_fetch_assoc($resultado);
    }

    function alteraEstudante($conexao, $id, $nome, $data_nascimento, $endereco){
        $query = "UPDATE estudante set nome = '{$nome}', data_nascimento = '{$data_nascimento}', endereco = '{$endereco}' where estudante_id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraCurso($conexao, $id, $nome, $Professor_responsavel){
        $query = "UPDATE curso set nome = '{$nome}', Professor_responsavel = '{$Professor_responsavel}' where curso_id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraProfessor($conexao, $id, $nome){
        $query = "UPDATE professor set nome = '{$nome}' where professor_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function alteraMatricula($conexao, $id, $estudante_id, $curso_id, $data_matricula){
        $query = "UPDATE matricula set estudante_id = '{$estudante_id}', curso_id = '{$curso_id}', data_matricula = '{$data_matricula}' where matricula_id = {$id}";

        return mysqli_query($conexao, $query);
    }

    function alteraNota($conexao, $id, $matricula_id, $nota){
        $query = "UPDATE nota set matricula_id = '{$matricula_id}', nota = '{$nota}' where nota_id = {$id}";

        return mysqli_query($conexao, $query);
    }

?>
