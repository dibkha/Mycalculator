<?php
namespace DibVendor\MyCalculator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function show()
    {
        return view('mycalculator::calculator');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $operator = $request->input('operator');
        $number2 = $request->input('number2');

        switch ($operator) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
            default:
                $result = 0;
        }

        return redirect()->route('calculator.show')->with('result', $result);
    }
}
