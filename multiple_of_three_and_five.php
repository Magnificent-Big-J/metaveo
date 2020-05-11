<?php
for($i = 1; $i<= 100; $i++){

    //multiple of three and five
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "treepie <br>";
    }
    else if($i % 3 == 0) { //multiple of three
        echo "tree <br>";
    }
    elseif ($i % 5 == 0) { //multiple of three five
        echo "pie <br>";
    } else {
        echo $i . "<br>";
    }
}