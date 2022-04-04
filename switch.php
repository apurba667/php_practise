<?php
    $x = rand(1,5);
    echo "$x";
    echo "<br>";
    switch ($x){
        case 1:
            echo "The number is 1";
            break;
        case 2:
            echo "The number is 2";
            break;
        case 3:
            echo "the number is 3";
            break;
        default:
        echo "No number between 1 to 3";
        
    }
?>