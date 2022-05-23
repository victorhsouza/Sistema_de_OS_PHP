<?php 

class osDTO{
    private $id_os;
    private $marca;
    private $modelo;
    private $tipo;
    private $defeito;
    private $solucao;
    private $cliente_cpf;
    private $preco;
    private $data_i;
    private $data_f;

    public function getId_os()
    {
        return $this->id_os;
    }


    public function setId_os($id_os)
    {
        $this->id_os = $id_os;

        return $this;
    }


    public function getData_i()
    {
        return $this->data_i;
    }


    public function setData_i($data_i)
    {
        $this->data_i = $data_i;

        return $this;
    }


    public function getData_f()
    {
        return $this->data_f;
    }


    public function setData_f($data_f)
    {
        $this->data_f = $data_f;

        return $this;
    }

   
    public function getMarca()
    {
        return $this->marca;
    }

  
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function getDefeito()
    {
        return $this->defeito;
    }


    public function setDefeito($defeito)
    {
        $this->defeito = $defeito;

        return $this;
    }

 
    public function getSolucao()
    {
        return $this->solucao;
    }


    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @returnself
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of cliente_cpf
     */ 
    public function getCliente_cpf()
    {
        return $this->cliente_cpf;
    }

    /**
     * Set the value of cliente_cpf
     *
     * @returnself
     */ 
    public function setCliente_cpf($cliente_cpf)
    {
        $this->cliente_cpf = $cliente_cpf;

        return $this;
    }
}