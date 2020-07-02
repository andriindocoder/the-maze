<?php 

	function returnAtSymbol() {
		echo "<span style ='font:15px Courier New'> @ </span>";
	}

	function returnSpace() {
		echo "<span style ='font:15px Courier New'> &nbsp </span>";
	}

	function generateMaze($input=15) {
		for($yaxis=0; $yaxis<$input; $yaxis++){
			for($xaxis=0; $xaxis<$input; $xaxis++){
				if($yaxis % 2 == 1){
					if($xaxis==0 || $xaxis == $input-1){
						returnAtSymbol();
					}else{
						returnSpace();
					}
				}else{
					if($yaxis % 4 == 0){
						if($xaxis == 1){
							returnSpace();
						}else{
							returnAtSymbol();
						}
					}else{
						if($xaxis == $input-2){
							returnSpace();
						}else{
							returnAtSymbol();
						}
					}
				}
			}
			echo "<br>";
		}
	}

	generateMaze(15);
