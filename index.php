<?php

	include ('inc/db_connect.php');


	$query = "SELECT * FROM explode";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		$rows[] = $row;		
	}
	$rand = rand ( 0, count($rows)-1 );
	$rand2 = $rand;

	while($rand == $rand2){
		$rand2 = rand ( 0, count($rows)-1 );
	}

	$item1_id = $rows[$rand]['id'];
	$item1 = $rows[$rand]['item'];
	$item1_pic = $rows[$rand]['item_pic'];
	$desc1 = $rows[$rand]['desc'];

	$item2_id = $rows[$rand2]['id'];
	$item2 = $rows[$rand2]['item'];
	$item2_pic = $rows[$rand2]['item_pic'];
	$desc2 = $rows[$rand2]['desc'];

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
	<div id="header-text">Which would you rather see explode?</div>
	<div id="team-wrapper">

	<?php if($none): ?>
		<div id="vote-all">You have voted for all the games! Check back later.</div>
		<!-- <div id="all-pic"><img src="img/football_620x350.jpg"></div> -->
	<?php else: ?>
		<div id="team-left">
			<div class="team-pic">
				<img src="images/<?php print $item1_pic; ?>">
			</div>
			<div class="results" team-wrapper="<?php print $item1; ?>">
				<button class="team-vote" iid="<?php print $item1_id; ?>" oppid="<?php print $item2_id; ?>"><?php print $item1; ?> </button>
				<div class="tooltip"><?php print $desc1; ?></div>
			</div>
		</div>

		<div id="team-right">
			<div class="team-pic">
				<img src="images/<?php print $item2_pic; ?>">
			</div>
			<div class="results" team-wrapper="<?php print $item2; ?>">
				<button class="team-vote" iid="<?php print $item2_id; ?>" oppid="<?php print $item1_id; ?>"><?php print $item2; ?> </button>
				<div class="tooltip"><?php print $desc2; ?></div>
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
