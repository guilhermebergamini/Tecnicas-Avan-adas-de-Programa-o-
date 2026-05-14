<?php

class Funcionario {
    protected $codigo;
    protected $nome;
    protected $salario;

    public function __construct ($codigo, $nome , $salario){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function Bonificacao(){
        $this->calc = $this->salario * 0.1;
        return $this->calc;
    }

    public function MostrarAtributos()
    {
        return "Código: {$this->codigo} , Nome: {$this->nome} , Salário: {$this->salario}<br>";
    }

}


?>