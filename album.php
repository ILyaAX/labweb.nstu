<?php
	require_once('connection.php');

	$query = $connection -> query("SELECT albums.title, albums.cover, artists.name, artists.description FROM albums JOIN artists ON albums.id_artist=artists.id WHERE albums.id='$_GET[id]'");
	$row = $query -> fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="
	wight=device-wight, initial-scale=1">
	<title><?php echo $row['title'];?></title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">

	<script src="averColor.js"></script>
	
</head>

<body class="wFull">
	<div id="cover-bg">
		<img id="cover" src="img/covers/<?php echo $row['cover'];?>" />
		<h2 class="artist-name">
			<?php echo $row['name'];?>
		</h2>
		<img class="arrow" src="img/angle-down-solid.png" />
	</div>
	<div class="w600">
		<h1>
		<?php echo $row['title'];?>
	</h1>
	<p>
		<?php echo $row['description'];?>
	</p>
	</div>	
</body>
</html>

