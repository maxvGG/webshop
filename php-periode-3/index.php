<!doctype html>
<html>
<body>
<?php
// Onderhoud persoon
// Door: Peter Bijker
// Datum: 3 februari 2017

// Database connectie
require_once 'config/connect.php';
?>
<h2>Onderhoud tabel Persoon :: Database 2</h2>
<h2>CREATE | READ | UPDATE | DELETE</h2>
<a href="pers_create.php">Klik hier voor toevoegen persoon</a>
<br/>
<br/>
<table border="2">
<tr><th>R</th><th>Voornaam</th><th>&nbsp;</th><th>Achternaam</th><th>Geslacht</th><th>Geboortedatum</th><th>Geboorteplaats</th><th>U</th><th>D</th></tr>
<?php
// Query uitvoeren
$sql = 'SELECT * FROM persoon'; // STAP 1: Schrijf de query
$result = $conn->query($sql);   // STAP 2: Voer de query uit
// Gegevens (of resultaat) laten zien
while($row = $result->fetch_assoc()) { // Haal resultaat met fetch op basis van assoc-iatie naam
	echo '<tr>';
	echo '<td><a href="pers_show.php?id='.$row['id'].'"><div>'.$row['id'].'</div></a></td>';
	echo '<td>'.$row['voornaam'].'</td>';     // Hier is de associatie naam: voornaam
	echo '<td>'.$row['tussenvoegsel'].'</td>';
	echo '<td>'.$row['achternaam'].'</td>';
	echo '<td>'.$row['geslacht'].'</td>';
	echo '<td>'.$row['geboortedatum'].'</td>';
	echo '<td>'.$row['geboorteplaats'].'</td>';
	echo '<td><a href="pers_change.php?id='.$row['id'].'">Wijzig</a></td>';
	echo '<td><a href="">Verwijder</a></td>';
	echo '</tr>';
}
?>
</table>
</body>
</html>