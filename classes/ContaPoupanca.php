<?php

// Cria uma classe que não permite herancas
final class ContaPoupanca extends Conta
{
    function retirar($quantia)
    {
        // Realiza validacao do saldo na conta
        if ($this->saldo >= $quantia)
        {
            // Realiza retirada
            $this->saldo -= $quantia;
        }
        else
        {
            // Retirada não permitida
            return false;
        }
        // Retirada permitida
        return true;
    }
}
