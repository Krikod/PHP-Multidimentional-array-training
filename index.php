<?php
/* Dans un autre fichier index.php, réalise une boucle qui itère sur les éléments du tableau précédent pour afficher la liste des spectacles de la journée. Pour chaque spectacle, la boucle affiche l'heure, le titre et l'artiste du spectacle, ainsi que l'image associée au spectacle. */

include "includes/header.php";
include "includes/spectacles.php";

echo "<table>" . "<tr>" . "<th>Heure</th>" . "<th>Titre</th>" . "<th>Artiste</th>" . "<th>Affiche</th>" . "</tr>";

echo "<tr>";
for ($r=0; $r < count($programme); $r++) { 
	for ($c=0; $c < count($programme[$r]); $c++) { 
		echo "<td>" . $programme [$r][$c] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

include "includes/footer.php"

?>
