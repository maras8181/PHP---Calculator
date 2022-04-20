<?php

class Calculator {
    public $firstNumber;
    public $secondNumber;
    
    public function addition($firstNumber, $secondNumber){
        echo "Součet čísel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber+$secondNumber);
    }
    
    public function substraction($firstNumber, $secondNumber){
        echo "Rozdíl čísel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber-$secondNumber);
    }
    
    public function multiplication($firstNumber, $secondNumber){
        echo "Součin čísel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber*$secondNumber);
    }
    
    public function division($firstNumber, $secondNumber){
        echo "Podíl čísel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber/$secondNumber);
    }
}

?>