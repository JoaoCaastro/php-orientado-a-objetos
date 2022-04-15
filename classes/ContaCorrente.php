<?php

// Criando classe ContaCorrente extendendo a classe Conta
class ContaCorrente extends Conta
{
    // Setando o atributo limite como protected
    protected $limite;

    // Criando métodos contrutores
    public function __construct($agencia, $conta, $saldo, $limite)
    {
        // Adicionando heranca na classe filha
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    // Criando método retirar
    public final function retirar($quantia)
    {
        // Realizando validacao do saldo e realizando retirada
        if( ($this->saldo + $this->limite) >= $quantia )
        {
            // Retirada permitida
            $this->saldo -= $quantia;
        }
        else
        {
            // Retirada não permitida
            return false;
        }
        return true;
    }
}