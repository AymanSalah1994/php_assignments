<?php 

$babel_List  = ["Ayman" , 'A' , 1 , true , 123 , "soso" , false ,true ]  ;
// We will Only Show NON-Boolean Values

for($i = 0  ; $i < count($babel_List) ;  $i++) {
    if(!is_bool($babel_List[$i])) {
        echo $babel_List[$i] . "<br>" ;
    }
    // This will ONLY show the NON-Boolean Values ; 
}
