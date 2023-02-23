<?php

class Calculater{
    public function calculateNumber($number1,$number2,$operator){

        switch($operator){
            case 'addition':
                return $number1+$number2;
        
            case 'Substraction':
                return $number1-$number2;
                
            case 'multiplication':
                    return $number1*$number2;
                        
            case 'division':
                    return $number1/$number2;
                default:
                    echo "Please chose valid Expression";
        }
    }











        


}


?>