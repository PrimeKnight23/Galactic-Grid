<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Tic Tac Toe</title>
	
	<link rel="stylesheet" href="pvp_design.css">

	</head>

	<body>
		<canvas id="canvas"></canvas>
		<div class="score_board">
			<?php
			session_start();

			// Check if the user is logged in
			if (!isset($_SESSION["user"])) {
				header("Location: login.php");
				exit();
			}

			// Access user information including full name
			$fullName = isset($_SESSION["full_name"]) ? $_SESSION["full_name"] : '';
			?>
			<h2 class="gri" id="player_n"><?php echo $fullName; ?></h2>
			<h1 class="gri" id="vs">VS</h1>
			<h2 class="gri" id="ai_n">AI</h2>
			<h1 class="gri" id="player_score">0</h1>
			<h1 class="gri" id="vs2">|</h1>
			<h1 class="gri" id="ai_score">0</h1>
		</div>
		<div class="container">	
				<button class="cell" id="0"></button>
				<button class="cell" id="1"></button>
				<button class="cell" id="2"></button>
				<button class="cell" id="3"></button>
				<button class="cell" id="4"></button>
				<button class="cell" id="5"></button>
		
				<button  class="cell" id="6"></button>
				<button  class="cell" id="7"></button>
				<button  class="cell" id="8"></button>
				<button  class="cell" id="9"></button>
				<button  class="cell" id="10"></button>
				<button  class="cell" id="11"></button>
			
				<button  class="cell" id="12"></button>
				<button  class="cell" id="13"></button>
				<button  class="cell" id="14"></button>
				<button  class="cell" id="15"></button>
				<button  class="cell" id="16"></button>
				<button  class="cell" id="17"></button>
			
				<button  class="cell" id="18"></button>
				<button  class="cell" id="19"></button>
				<button  class="cell" id="20"></button>
				<button  class="cell" id="21"></button>
				<button  class="cell" id="22"></button>
				<button  class="cell" id="23"></button>
			
				<button  class="cell" id="24"></button>
				<button  class="cell" id="25"></button>
				<button  class="cell" id="26"></button>
				<button  class="cell" id="27"></button>
				<button  class="cell" id="28"></button>
				<button  class="cell" id="29"></button>
			
		
		</div>


		<div class="endgame">
			<div class="text"></div>
		</div>

		<button class="back" onclick="location.href='pvaiIn.php'">Back</button>

		<script src="baseAI.js"></script>
		<script src="starbg.js" type="module"></script>
		<script src="audiobg.js"></script>
	</body>
</html>
