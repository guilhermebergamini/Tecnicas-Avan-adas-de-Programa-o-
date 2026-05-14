<?php

class Diretor extends Funcionario {

    public function __construct($codigo, $nome, $salario) {
        parent::__construct($codigo, $nome, $salario);
    }

    public function Bonificacao() {
        return 1000 + parent::Bonificacao();
    }

    public function MostrarAtributos() {
        return parent::MostrarAtributos() .
               "Bonificação do diretor: " . $this->Bonificacao();
    }
}

?>