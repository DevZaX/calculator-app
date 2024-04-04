<?php

namespace App\Services;

use App\Interfaces\OperationInterface;

class Multiplication   implements OperationInterface
{
  public function calculate(float $firstNumber, float $secondNumber):float
  {
    return $firstNumber * $secondNumber;
  }
}