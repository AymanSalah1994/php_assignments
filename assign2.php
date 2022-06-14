<?php 
// This is supposed to search for Film Name in a List : 

$films  = ["Prestige" , "The Dark Knight" , "The Godfather" , "The Shawshank Redemption" , "xxx"];  

$search_for  = "xxx" ; 
// This is supposed to get film Name from a Form  ; 
foreach ($films as $film) {
    if ($film == $search_for) {
        echo "Found it!";
        echo "<br>";
        echo $film ; 
    }
}