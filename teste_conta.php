<?php

require_once "conta_bancaria.php";


$conta1 = new ContaBancaria();
$conta1->setTitular("victor");

echo "<h2>Conta 1 - " . $conta1->getTitular() . "</h2>";

echo "Saldo inicial: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

$conta1->depositar(5000);

echo "Após depósito de R$ 5.000,00: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 500,00:<br>";
$conta1->sacar(500);

echo "Saldo após saque: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 5000,00:<br>";
$conta1->sacar(5000);

echo "Saldo final: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";



$conta2 = new ContaBancaria();
$conta2->setTitular("joao");

echo "<h2>Conta 2 - " . $conta2->getTitular() . "</h2>";

echo "Saldo inicial: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

$conta2->depositar(300);

echo "Após depósito de R$ 300,00: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 100,00:<br>";
$conta2->sacar(100);

echo "Saldo após saque: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 300,00:<br>";
$conta2->sacar(300);

echo "Saldo final: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";
