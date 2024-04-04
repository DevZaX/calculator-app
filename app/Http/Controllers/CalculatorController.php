<?php

namespace App\Http\Controllers;

use App\Services\Addition;
use App\Services\Calculator;
use App\Services\Multiplication;
use App\Services\Division;
use App\Services\Subtraction;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $operation = $request->operation;

        $calculator = new Calculator($firstNumber, $secondNumber);

        switch ($operation)
        {
            case "plus":
                $result = $calculator->calculate(new Addition);
                break;
            case "minus":
                $result = $calculator->calculate(new Subtraction);
                break;
            case "multiply":
                $result = $calculator->calculate(new Multiplication);
                break;
            case "divide":
                $result = $calculator->calculate(new Division);
                break;
            default:
                $result = ['status' => 'error', 'message' => 'Invalid operation'];
        }
        return redirect('/calculator')->with($result)->withInput();
    }
}
