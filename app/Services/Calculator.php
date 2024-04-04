<?php 

namespace App\Services;

use App\Interfaces\OperationInterface;
use Exception;

class Calculator 
{
  private $firstNumber;
  private $secondNumber;

  public function __construct($firstNumber, $secondNumber)
  {
    $this->firstNumber = $firstNumber;
    $this->secondNumber = $secondNumber;
  }

  public function calculate(OperationInterface $operation)
  {
    try {
      $result = $operation->calculate($this->firstNumber, $this->secondNumber);
      return ['status' => 'success', 'result' => $result];
    } catch (Exception $e)
    {
      return ['status' => 'error', 'message' => $e->getMessage()];
    }
    
  }
}