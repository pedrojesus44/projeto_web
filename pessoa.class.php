<?php

    class Pessoa
    {
        private $nome;
        private $endereco;

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getNome()
        {
            return $this->nome;
        }
    }



?>