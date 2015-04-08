<?php 

$fichier = file('citation.txt'); // Nom du fichier qui contient les citations

$total = count($fichier)-1; // Total du nombre de lignes du fichier

$i = mt_rand(0, $total); // Nombre au hasard entre 1 et le total du nombre de lignes

echo $fichier[$i]; // On affiche une citation au hasard

?>