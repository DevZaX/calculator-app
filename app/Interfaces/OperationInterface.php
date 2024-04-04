<?php 

namespace App\Interfaces;

interface OperationInterface
{
  public function calculate(float $firstNumber, float $secondNumber): float;
}