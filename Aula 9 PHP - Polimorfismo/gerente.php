<?php

class Gerente extends Funcionario {
    
    public function __construct($codigo, $nome, $salario) {
        parent::__construct($codigo, $nome, $salario);
    }

    public function Bonificacao() {
        return $this->salario * 0.15;
    }

    public function MostrarAtributos() {
        return parent::MostrarAtributos() .
               "Bonificação do gerente: " . $this->Bonificacao();
    }
}

?>