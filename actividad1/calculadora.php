<?php
declare(strict_types=1);

$decision=filter_input(INPUT_POST, 'decision');
$num1=filter_input(INPUT_POST, 'num1');


    function factorial(int $num1): int{
        $result=1;
        for($i=1; $i<=$num1; $i++){
            $result=$result*$i;
        }
        return $result;
    }

    function sum(array $num): float{
        $result;
        for($i=0; $i<count($num); $i++){
            $result+=$num[$i];
        }
        return $result;
    }

    function prime(int $num):bool{
        if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
            return True;
        } else {
            if ($num % 2 != 0) {
                for ($i = 3; $i <= sqrt($num); $i += 2) {
                    if ($num % $i == 0) {
                        return False;
                    }
                }
                return True;
            }
        }
        return False;
    }

    $num=[6,2];
    $decision="suma";

    function performOperation(String $decision, array $num){
        if($decision==="factorial"){
            return factorial($num[0]);
        }else if($decision==="suma"){
            return sum($num);
        }else if($decision==="primero"){
            return prime($num[0]);
        }
    }

    echo performOperation($decision, $num);