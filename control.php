<?php
	require("func.php");
	session_start();

	if(isset($_GET['op'])){

		$op=$_GET['op'];
		
		if($op=="add"){
			if(empty($_GET['valor'])){
				header("Location:index.php");
			}
			else{
				insereFila($_SESSION['div'], $_GET['valor']);
				header("Location:index.php");
			}
		}
		if($op=="rem"){
			removeFila($_SESSION['div']);
			header("Location:index.php");
		}
		if($op=="ord"){
			ordenaFila($_SESSION['div']);
			header("Location:index.php");
		}
	}
	elseif(isset($_GET['resetSession'])){
		resetSession();
		header("Location:index.php");
	}

?>