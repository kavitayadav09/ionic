<?php

	function odd($number){
		
		for($i=1; $i<=$number; $i++){
			
			if($i%2 == 0){
				
				echo $i. " is even number <br /><br />";
			}else{
				echo $i. " is odd number ";?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php
			}
		}
	}
	odd(10);
?>