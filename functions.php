<?php

function category() {
	$sql = "SELECT * FROM tasks";

	$resultat = mysqli_query($connect, $sql);

	echo '<pre>';
	var_dump($resultat);
	echo '</pre>';
}

category($connect);