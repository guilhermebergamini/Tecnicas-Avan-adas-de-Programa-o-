<?php

class Secretario extends Funcionario {

    public function __construct($codigo, $nome, $salario) {
        parent::__construct($codigo, $nome, $salario);
    }

    public function MostrarAtributos() {
        return parent::MostrarAtributos() .
               "Bonificação do secretário: " . $this->Bonificacao();
    }
}

?>