<?php
$sqlCommentsAll = "SELECT * FROM comment";
$tableCommentsAll = mysqli_query($connexion, $sqlCommentsAll);
$resultatCommentsAll = mysqli_fetch_all($tableCommentsAll, MYSQLI_ASSOC);
// requete SQL pour table vote
$star_result = array();
// je crée un nouveau tableau

$nombre_de_vote = mysqli_num_rows($tableCommentsAll);

echo "$nombre_de_vote";

// exit;

foreach ($resultatCommentsAll as $key_comment => $value_comment) {
// je lance un foreach pour parcourir le tableau de la requete SQL

	// echo "<pre>";
	// print_r($value_comment);
	// echo "</pre>";
  
	$star_result[$_GET['id_article']]['vote'] += $value_comment['star_comment'];
	// on insert les données du tableau de la requete SQL
	// dans un nouveau tableau créer au préalable 
	// tableau[clé que l'on définit] += (on additionne à chaque boucle) le vote de l'id_article

}

// echo "<pre>";
// print_r($star_result);
//  echo "</pre>";

 // AFFICHER LA MOYENNE SUR LA FICHE VEDETTE de fiche_article/index.php
?>