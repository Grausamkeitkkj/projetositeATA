<?php
require_once('class/class_aluno_experimental.php');
require_once('funcoes/funcoes_uteis.php');
$alunoExperimental = new alunoExperimental();
$result = $alunoExperimental->getExperimental();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shijum</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Inclua a biblioteca jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="form-container">
        <div class="row">
            <div class="col">
                <h1 class="title-tables">Cadastro Rápido de Aula Experimental</h1>
                <form method="post" action="form_experimental.php">
                    <div class="form-group">
                        <input type="text" id="nome" name="nome" placeholder="Nome do aluno" class="form-control form-control-sm">   
                    </div>
                    <div class="form-group">
                        <input type="number" id="idade" name="idade" placeholder="Idade" class="form-control form-control-sm">   
                    </div>
                    <div class="form-group">
                        <select id="nivel" name="nivel" class="form-control form-control-sm">
                            <option value="">Selecione o nível</option>
                            <option value="1">Tiger</option>
                            <option value="2">Adolescente</option>
                            <option value="3">Adulto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data">Data da aula:</label>
                        <input type="date" id="data" name="data" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="hora">Horário da aula:</label>
                        <input type="time" id="hora" name="hora" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="text" id="telefone" name="telefone" placeholder="Telefone" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cadastrar" class="btn btn-primary btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-tables">Aulas Experimentais</h1>
                <table class="table table-striped table-sm custom-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Nível</th>
                            <th>Data</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            if($row['nivel'] == 1){
                                $row['nivel'] = 'Tiger';
                            } elseif($row['nivel'] == 2){
                                $row['nivel'] = 'Adolescente';
                            } else {
                                $row['nivel'] = 'Adulto';
                            }
                            echo "<tr>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['idade'] . "</td>";
                            echo "<td>" . $row['nivel'] . "</td>";
                            echo "<td>" . date('d/m/Y', strtotime($row['data'])) . "</td>";
                            echo "<td>" . formata_telefone($row['telefone']) . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/menu.js"></script>
    <!-- Inclua a biblioteca jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
</body>
</html>