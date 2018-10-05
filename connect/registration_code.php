<!--
Here, we write code for registration.
-->
<?php
require_once('conn.php');

$email = $_POST['email'];
$pwd = $_POST['wachtwoord'];
$password = MD5($pwd);
$vnaam = $_POST['voornaam'];
$geboorte = $_POST['geboortedatum'];
$tussenvgsl = $_POST['tussenvoegsel'];
$anaam = $_POST['achternaam'];
$straat = $_POST['straat'];
$postcode = $_POST['postcode'];
$woonplts = $_POST['woonplaats'];
$provincie = $_POST['provincie'];
$mobiel = $_POST['mobiel'];
$telefoon = $_POST['telefoon'];
$linkedin = $_POST['linkedin'];
$facebook = $_POST['facebook'];
$iban = $_POST['facebook'];
$soortbank = $_POST['naambank'];
$rollen = 'Stagiair';

$sql = "INSERT INTO `gebruikers`(`voornaam`, `tussenvoegsel`, `achternaam`, `email`, `wachtwoord`,`rollen`, `straat`, `woonplaats`, `provincie`, `postcode`, `geboortedatum`, `mobielnummer`, `telefoonnummer`, `profielfoto`, `linkedin`, `facebook`, `iban`, `soortbank`) VALUES ('$vnaam','$tussenvgsl','$anaam','$email','$password', '$rollen' ,'$straat','$woonplts','$provincie','$postcode','$geboorte','$mobiel', '$telefoon', '', '$linkedin','$facebook','$iban','$soortbank')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: ../index.php");
}
else
{
	echo "Error :".$sql;
}
?>