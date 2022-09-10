<?php

class AlunoDTO{
    private $nome;
    private $cpf;
    private $email;
    private $datanasc;
    private $curso;

    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;

        return $this;
    }

    
    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}

?>