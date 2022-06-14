<?php
// Find the Max Number  ; 

$numbers  = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// $numbers = [1,2,3,4,5,6,7,8,9,10];

$max  =  0;
foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    }
}
echo "Max Number is : " . $max;
