<?php 
//This is abuont Counting the Number of repeating ; 
$film_Name  = "12 Angry Men" ; 
$films  = ['The Shawshank Redemption', 'The Godfather', 'The Godfather: Part II', 'The Dark Knight', '12 Angry Men' , '12 Angry Men'] ; 


$counting =   0  ; 
foreach ($films as $filmSingle) {
    if($film_Name == $filmSingle) {
        $counting += 1  ; 
    }
}
echo "The Film : " . $film_Name . " Was Repeated : " . $counting . " Times " ; 
