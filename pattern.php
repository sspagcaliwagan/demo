<?php

  //creates a diamond shaped pattern by creating two shapes and  	merging them together - a triangle and an inverted triangle pattern respectively
 
	$n = 3;
	$space = $n - 1; 

  //adds spaces where there are no asterisks	
	for($row = 1; $row <= $n; $row++){
        for($i = 1; $i <= $space; $i++){
            echo "&nbsp";
    	 }
	     $space--;
	//prints n number of asterisks depending on the value of the $row
	    for($i = 1; $i <= $row ; $i++){ 
		    echo "* ";
	    }
	    echo "<br>";
	}
	
	//creates an inverted triangle pattern, starts with n = 2 to create the lower half of the diamond
    $space = 1;
    for($row = $n - 1; $row >= 1; $row--){
       for($i = 1; $i <= $space; $i++){
		    echo "&nbsp";
	    }
	    $space++;

	    for($i = 1; $i <= $row ; $i++){
		    echo "* ";
	    }
	    echo "<br>";
    }	
	
?>
