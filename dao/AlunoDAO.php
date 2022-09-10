<?php

class AlunoDAO{

    function cadastrarAluno(AlunoDTO $AlunoDTO){
        $nome = $AlunoDTO->getNome();
        $cpf = $AlunoDTO->getCpf();
        $email = $AlunoDTO->getEmail();
        $datanasc = $AlunoDTO->getDatanasc();
        $curso = $AlunoDTO->getCurso();


        //Conexão com BD

        $bd = new mysqli('localhost','root','','ensinoOnline');
        $sql = $bd->query("insert into alunos values 
        ('$nome','$cpf','$email','$datanasc','$curso')");
        
        return $sql;

        if(!$sql){
            $msg = $bd->error;
            echo $msg;
        }
    }
}

?>