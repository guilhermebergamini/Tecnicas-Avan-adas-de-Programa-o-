<?php

class Departamento{

    private $codigo;
    private $nome;
    private array $vetorFuncionarios = [];

    public function __construct($codigo, $nome)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
    }
    public function MostrarDados()
    {
        echo "<p>Código: ".$this->codigo." <p>Nome:".$this->nome. " Funcionario: ".$this->vetorFuncionarios;
    }

    public function admitirFuncionario(Funcionario $novoFuncionario)
    {
        $this->vetorFuncionarios[] = $novoFuncionario;
    }

    public function listarDadosFuncionarios()
    {
        foreach ($this->vetorFuncionarios as $funcionario)
        {
            $funcionario->MostrarDados();   
        }
    }

    public function demitirFuncionario ($codigo)
    {
        if ($funcionario->getCodigo() == $codigoFuncionario)
        {
        unset($this->vetorFuncionarios[$indice]);
        echo "Funcionario Demitido com Sucesso";
        return;
        }
    }

    public function CalcularFolhaPagamento()
    {
        $total = 0;

        foreach($this->vetorFuncionarios as $funcionario)
        {
            $total += $funcionario->calcularSalario(22);
        }
        return $total;
    }
}



?>