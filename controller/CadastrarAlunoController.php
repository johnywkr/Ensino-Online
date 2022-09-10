<?php
require_once '../dto/AlunoDTO.php';
require_once '../dao/AlunoDAO.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$datanasc = $_POST['datanasc'];
$curso = $_POST['curso'];

print_r([$nome,$cpf,$email,$datanasc,$curso]);

$alunoDTO = new AlunoDTO();
$alunoDTO->setNome($nome);
$alunoDTO->setCpf($cpf);
$alunoDTO->setEmail($email);
$alunoDTO->setDatanasc($datanasc);
$alunoDTO->setCurso($curso);

$alunoDAO = new AlunoDAO();
$alunoDAO->cadastrarAluno($alunoDTO);

?>