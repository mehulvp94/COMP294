<?php
?>

<!DOCTYPE html>
<html>
<head>
<title>Franklin March Madness Pool</title>
<link rel="stylesheet" href="/application/views/css/css.php">
</head>
<body>
	<div id="main">
		<h1>
			<img src="/application/views/images/basketball.png" alt="Image"
				style="float: right; width: 100px; height: 100px;"> <img
				src="/application/views/images/franklinlogo.png" alt="Image"
				style="float: left; width: 100px; height: 100px;"> Franklin March
			Madness Pool
		</h1>
	</div>
	<ul>
		<li><a href="HomeController">Home</a></li>
		<li><a href="BracketController">Bracket</a></li>
		<li><a href="LeaderboardController">Leaderboard</a></li>
		<li><a class="active" href="RulesController">Rules</a></li>
	</ul>

	<div align="center">
		<h2>
			<p>Rules for March Madness Bracket Pool.</p>
		</h2>
	</div>

	<br>
	<li>Please fill out your Bracket under Bracket tab.</li>
	</br>
	<br>
	<li>Bracket picks cannot be changed once the play starts.</li>
	</br>
	<br>
	<li>After filling the bracket click on the submit button to submit your
		picks.</li>
	</br>
	<br>
	<li>Points are assigned by the system for each round of play. There are
		total 6 round to March Madness tournament.</li>
	</br>
	<br>
	<li>For each correct winner picked from each round you will be given a
		score from the following table by the administrator user.</li>
	</br>
	<br>
	<table border="1">
		<tr>
			<th>Round</th>
			<th>Points</th>
		</tr>
		<tr>
			<td>Round 1</td>
			<td>1 point</td>
		</tr>
		<tr>
			<td>Round 2</td>
			<td>2 point</td>
		</tr>
		<tr>
			<td>Round 3</td>
			<td>4 point</td>
		</tr>
		<tr>
			<td>Round 4</td>
			<td>8 point</td>
		</tr>
		<tr>
			<td>Round 5</td>
			<td>16 point</td>
		</tr>
		<tr>
			<td>Championship game</td>
			<td>32 point</td>
		</tr>
	</table>
	</br>
	<br>
	<li>In a LeaderBoard, user will be able to know who has the most points
		based on his/her picks.</li>
	</br>

	<br>
	<div align="center">
		Thank You For playing March Madness with us. </br>
	</div>
</body>
</html>