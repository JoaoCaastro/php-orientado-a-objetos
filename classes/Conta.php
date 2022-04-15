<?php

// Criando uma classe abstrata Conta
abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    // Criando métodos contrutores
    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta   = $conta;

        // Validacao do saldo
        if($saldo >= 0)
        {
            $this->saldo = $saldo;
        }
    }

    // Método para pegar informacoes da conta
    public function getInformacoes()
    {
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }

    // Método para deposito em conta
    public function depositar($quantia)
    {
        if($quantia > 0)
        {
            $this->saldo += $quantia;
        }
    }

    // Método para pegar saldo da conta
    public function getSaldo()
    {
        return $this->saldo;
    }

    // Método abstrato para saque
    abstract function sacar($quantia);
}
