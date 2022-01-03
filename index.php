<?php
	require_once('connection.php');

	$query = $connection -> query("SELECT albums.id, albums.title, albums.rating, albums.cover, artists.name FROM albums JOIN artists ON albums.id_artist=artists.id");
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="
	wight=device-wight, initial-scale=1">
	<title>Music</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="w90">
	<header></header>

	<h1>Музыка</h1>

	<div>
		<input type="text" id="find-filed" placeholder="Поиск"></input>
	</div>

	<div id="albums" class="albums">
		<?php while ($row = $query -> fetch_assoc()) 
		{ ?>
			<div class="album">
				<div class="album-image">
					<a href="albubs.php?id=<?php echo $row[id]; ?>">
						<img src="img/covers/bohemian.jpg">
					</a>
				</div>
				<div class="rating r-4">
					
				</div>
				<h3>
					<a href="#">
						Bohemian Rapsody
					</a>
				</h3>
				<h4>
					<a href="#">
						 Queen
					</a>
				</h4>
			</div>
		<?php } ?>	
	</div>
</body>
</html>