<?php 

$servername = 'localhost';
$username = 'root';
$password = "";
$db = 'pokemon';

$conn = mysql_connect($servername,$username,$password);

if (!$conn) {
	echo "tidak tersambung mysql";
	die(mysql_error());
}
mysql_select_db($db);
$sql = "SELECT pokemon.id, pokemon.name, pokemon.strength, element.multipler, element.name_element
    FROM pokemon
    LEFT JOIN element
    ON pokemon.element_id=element.element_id
    ORDER BY element.name_element";
// $sql = "SELECT pokemon.name, pokemon.strength, element.multipler, element.name
// FROM pokemon
// INNER JOIN element
// ON pokemon.element_id=element.id";


$query = mysql_query($sql);
if (!$query) {
	die(mysql_error());
} 

while ($data = mysql_fetch_array($query)) {

$pokemon_name = $data['name'];

$modifed_strength = $data['strength'] + $data ['multipler'];

$element_name = $data['name_element'];
if ($modifed_strength>40) {

 	

echo $pokemon_name;
echo "<br>";
echo $modifed_strength;
echo "<br>";
echo $element_name;
echo "<br>";

}
}





 ?>