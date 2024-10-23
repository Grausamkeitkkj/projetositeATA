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
    <nav class="side-menu">
        <div class="expand-button">
            <i class="bi bi-list" id="exp-button"></i>
        </div>
        <ul>
            <li class="item-menu">
                <a href="#" class="menu-link">
                    <span class="icon"><i class="bi bi-clipboard-plus"></i></span>
                    <span class="txt-link">Cadastro</span>
                </a>
                <ul class="sub-menu">
                    <li class="item-sub-menu"><a href="#">Aluno</a></li>
                    <li class="item-sub-menu"><a href="#">Professor</a></li>
                </ul>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-clipboard-plus"></i></span>
                    <span class="txt-link">Cronograma de Aulas</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="form-container">
        <div class="row">
            <div class="col">
                <h1 class="title-tables">Cadastro Rápido de Aula Experimental</h1>
                <form method="post" action="form_experimental.php">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome do aluno" class="form-control form-control-sm">   
                    </div>
                    <div class="form-group">
                        <input type="number" id="age" name="age" placeholder="Idade" class="form-control form-control-sm">   
                    </div>
                    <div class="form-group">
                        <select id="level" name="level" class="form-control form-control-sm">
                            <option value="">Selecione o nível</option>
                            <option value="1">Tiger</option>
                            <option value="2">Adolescente</option>
                            <option value="3">Adulto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Data da aula:</label>
                        <input type="date" id="date" name="date" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="time">Horário da aula:</label>
                        <input type="time" id="time" name="time" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone" name="phone" placeholder="Telefone" class="form-control form-control-sm">
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
                <table class="table table-striped table-sm">
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
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h1 class="title-tables">Aulas de hoje</h1>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Horário</th>
                            <th>Nível</th>
                        </tr>
                    </thead>
                    <tbody id="another-table-body">
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
            $('#phone').mask('(00) 00000-0000');
        });
    </script>
</body>
</html>