<?php 
// Find Similar Items and Print them ; 
$first_array = ["A" , "B" , "C" , "D" , "KKKK" , "KKKK" , "KKKK"] ;  
$second_array = ["E" , "F" , "A" , "B" , "C" , "KKKK"] ;
// TODO : Make Each array Has Unique Values Before anything ;
foreach($first_array as $character1) {
    foreach($second_array as $character2) {
        if($character1 == $character2) {
            echo $character1 . "<br>" ;
            break ; 
        }
    }
}