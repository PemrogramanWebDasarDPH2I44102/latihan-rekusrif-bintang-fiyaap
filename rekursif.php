<?php

$b = 5;
		function r($f,$i){
		  if($f>0){
		  	if($i>0){
		  		echo "* ";
		  		$i--;
		  		r($f,$i);
		  	}else{
		  		echo "<br>";
		  		$f--;
		  		r($f,$f);
		  	}
		  }
		}
		r($b,$b);

	echo "------------------------------------------------------------------------------------------------------------------------------------<br>";


	$p = 5;
		function z($y,$a,$p){
		  if($y<=$p){
		  	if($a<=$y){
		  		echo "$a ";
		  		$a++;
		  		z($y,$a,$p);
		  	}else{
		  		echo "<br>";
		  		$y++;
		  		z($y,1,$p);
		  	}
		  }
		}
		z(1,1,$p);

?>
