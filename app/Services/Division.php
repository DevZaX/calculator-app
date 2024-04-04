<?php

namespace App\Services;

use App\Interfaces\OperationInterface;
use Exception;

class Division  implements OperationInterface
{
  public function calculate(float $firstNumber, float $secondNumber):float
  {
    if ($secondNumber == 0) throw new Exception('Division by zero not allowed');
    return $firstNumber / $secondNumber;
  }
}