<?php 

class funcionarioDTO{
    private $cpf;
    private $nome;
    private $cargo;
    private $usuario;
    private $senha;
    private $perfil;
    private $sexo;
    private $datanasc;


    

    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

 
    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

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
 
    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
 
    public function getSenha()
    {
        return $this->senha;
    }

    
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

 
    public function getPerfil()
    {
        return $this->perfil;
    }


    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }
}