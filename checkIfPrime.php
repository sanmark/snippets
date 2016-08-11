<?php 

function checkPrime($val) {
    $isPrime = true;
    $sqrt = sqrt($val);
       
    if($val==2)
        return TRUE;
    
    if($val==1 || $val % 2 ==0)
        return FALSE;
    
    for ($j = 3; $j <= $sqrt; $j=$j+2) {

        if ($val % $j == 0) {
            $isPrime = FALSE;
            break;
        }
    }
    return $isPrime;
}