<?php
	function resetSession(){ 
		session_start();
		session_destroy();
	}
 	function insereFila(&$fila, $valor){
 		if(empty($fila)){
	 		$fila[0]=$valor;
 		}
 		elseif(!empty($fila)){
 			$fila[sizeof($fila)]=$valor;
 		}
 	}
 	function removeFila(&$fila){
 		if(!empty($fila)){
 			array_shift($fila);
 		}
 	}
 	function retornaMenor(&$fila, $index){
	    for ($i=0;$i<=$index;$i++) { 
	    	$aux[$i]=$fila[$i];
	    }
	    return min($aux); 
	}
	function botaInicio(&$fila, $menor){
		while($fila[0] != $menor){
			$atual = $fila[0];
			removeFila($fila);
			insereFila($fila, $atual);
		}
	}
 	function ordenaFila(&$fila){
 		$aux = array();
 		$size = sizeof($fila);
		for($i=1;$i<=$size;$i++){
			$menor = retornaMenor($fila, $size-$i);
			botaInicio($fila, $menor);
			insereFila($aux, $menor);
			removeFila($fila);
		}
		for($j=0;$j<$size;$j++){
			insereFila($fila, $aux[$j]);
		}
 	}
?>