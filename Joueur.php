
<!DOCTYPE html>
<html>
	<?php
	// On se connecte à la base de données 
	$id = @mysqli_connect("localhost", "root", "root","tennis") or die ("Impossible de se connecter à la base");
	?>

	<head>
		<meta charset="utf-8">
		<title> Joueur </title>
		<link rel="stylesheet" href="siteweb.css"/>
		<script src="script.js" defer></script>
	</head>

	<body>
		<nav> 
        <div id="fondmenu">
           <ul id="menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="Joueur.php">Joueur</a></li>
            <li><a href="bases.html">Bases</a></li>
            <li><a href="Terrain.html">Terrain</a></li>
            <li><a href="Histoire.html">Histoire</a></li>
           </ul> 
        </div>
        </nav>
		<section>
			<article id="block">
						<div id="beau">
						  <h1> Les joueurs</h1>
						</div>
						<p> Ici, vous pouvez avoir accès à une base de données des joueurs </p>
						<input type="text" id="champ" placeholder="Joueur ?">
						<button id="btn">GET info</button>
						<?php
						// Affiche la base 
						$res= mysqli_query($id, "SELECT * FROM joueur");
							while ($tab= mysqli_fetch_assoc($res)){
    						echo implode("---", $tab);
    						echo "<br />";
						}
						print_r($tab);
						?>
					  </div>
			</article>
		</section>
	</body>
</html>
