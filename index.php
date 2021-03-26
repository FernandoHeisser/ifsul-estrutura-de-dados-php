<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trabalho Fila</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script scr="func.php"></script>
</head>
<body style="background-color: black;">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #01DF3A;">
      <a class="navbar-brand" href="index.php">Trabalho Fila</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          	<input type="number" id="inp" style="width: 50px;" required>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="add" href="javascript:window.location='control.php?op=add&valor='+document.getElementById('inp').value;">Insere</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="control.php?op=rem">Remove</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="control.php?op=ord">Ordena</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="control.php?resetSession">Reset</a>
          </li>
        </ul>
      </div>
    </nav>
    <div style=" margin: 1% 4% 2% 4%; width:auto; height:550px; background-color:#01DF3A; padding-left:3%; padding-top: 0px;">
    	<?php
    		session_start();
    		if (isset($_SESSION['div'])) {
    			foreach ($_SESSION['div'] as $var){ 
    				echo "<div style='float:left; margin-right:20px; margin-top:20px; width:100px; height:100px; background-color:white; border:solid 2px black; padding-top: 27px; box-sizing: border-box;'><p align='center' style='font-family:arial; font-size:30px;' >".$var."</p></div>";
    			}
    		}
    	?>
    </div>
</body>
</html>