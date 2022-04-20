<?php

class Calculator {
    public $firstNumber;
    public $secondNumber;
    
    public function addition($firstNumber, $secondNumber){
        echo "Soucet cisel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber+$secondNumber);
    }
    
    public function substraction($firstNumber, $secondNumber){
        echo "Rozdil cisel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber-$secondNumber);
    }
    
    public function multiplication($firstNumber, $secondNumber){
        echo "Soucin cisel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber*$secondNumber);
    }
    
    public function division($firstNumber, $secondNumber){
        if ($secondNumber == 0){
            echo "DELENI NELZE PROVEST!! Snazis se delit nulou!";
        } else {
            echo "Podil cisel ".$firstNumber." a ".$secondNumber." je: ".($firstNumber/$secondNumber);
        }
    }
}

//class Person {
//    
//    public $firstname;
//    public $lastname;
//    
//    public function __construct($firstname, $lastname){
//        $this->firstname = $firstname;
//        $this->lastname = $lastname;
//    }
//    
//    public function sayHello(){
//        echo "Hello, I'am: ".$this->firstname." ".$this->lastname;
//    }
//    
//    public function currentTime(){
//        echo "The current time is: ".date("H:i:s");
//    }
//    
//    public function __toString(){
//        return $this->firstname." ".$this->lastname;
//    }
//    
//}

?>