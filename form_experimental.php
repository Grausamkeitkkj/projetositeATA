<?php

require_once("funcoes/funcoes_uteis.php");
require_once("class/class_aluno_experimental.php");

$aluno = new alunoExperimental();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = $_POST;
    $dados["telefone"] = limpa_texto($dados["telefone"]);
    $data = DateTime::createFromFormat('d-m-Y', $dados["data"]);
    $datainicial = new DateTime();
    $datainicial->modify('-2 days');
    $dataFinal = DateTime::createFromFormat('d-m-Y', '01-01-2030');

    if(empty($dados["nome"]) || empty($dados["idade"]) || empty($dados["nivel"]) || empty($dados["data"]) || empty($dados["hora"]) || empty($dados["telefone"])) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.location.href = 'index.php';</script>";
        die();
    }
    if(strlen($dados["telefone"]) !=11){
        echo "<script>alert('Por favor, preencha o campo telefone corretamente.'); window.location.href = 'index.php';</script>";
        die();
    }

    if ($data > $dataFinal || $data < $datainicial) {
        echo "<script>alert('Por favor, preencha o campo data com uma data válida.'); window.location.href = 'index.php';</script>";
        die();
    }

    $dados["data"] = implode('-', array_reverse(explode('/', $dados["data"])));
    $aluno->addExperimental($dados);
    header("Location: index.php");
   
}