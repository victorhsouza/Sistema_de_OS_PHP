<?php 
    class clienteDTO{
        private $cpf;
        private $nome;
        private $datanasc;
        private $sexo;


        public function getCpf(){
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


        public function getDatanasc()
        {
                return $this->datanasc;
        }


        public function setDatanasc($datanasc)
        {
                $this->datanasc = $datanasc;

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
    }
