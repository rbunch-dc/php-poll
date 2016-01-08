<?php

	include ('inc/db_connect.php');


	$query = "SELECT * FROM basketball";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		$rows[] = $row;		
	}
	$rand = rand ( 0, count($rows)-1 );

	$match_id = $rows[$rand]['id'];
	$team1 = $rows[$rand]['team1'];
	$team2 = $rows[$rand]['team2'];
	$team1_pic = $rows[$rand]['team1_pic'];
	$team2_pic = $rows[$rand]['team2_pic'];


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/script.js"></script> -->

	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>


<div id="container">
	<div id="header-text">Who will win?</div>
	<div id="team-wrapper">

	<?php if($none): ?>
		<div id="vote-all">You have voted for all the games! Check back later.</div>
		<!-- <div id="all-pic"><img src="img/football_620x350.jpg"></div> -->
	<?php else: ?>
		<div id="team-left">
			<div class="team-pic">
				<img src="images/<?php print $team1_pic; ?>">
			</div>
			<div class="results" team-wrapper="<?php print $team1; ?>">
				<button class="team-vote" mid="<?php print $match_id; ?>" team="<?php print $team1; ?>" opp="<?php print $team2; ?>"><?php print $team1; ?> wins</button>
			</div>
		</div>

		<div id="team-right">
			<div class="team-pic">
				<img src="images/<?php print $team2_pic; ?>">
			</div>
			<div class="results" team-wrapper="<?php print $team2; ?>">
				<button class="team-vote" mid="<?php print $match_id; ?>" team="<?php print $team2; ?>" opp="<?php print $team1; ?>"><?php print $team2; ?> wins</button>
			</div>
		</div>
		<div id="next-vote">
			<a href="/"><button class="team-vote">Next</button></a>
		</div>
	</div>
	<? endif; ?>

</div>




</body>
</html>
