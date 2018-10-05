<?php

require_once ('conn.php');
$email = $wachtwoord = $ww = '';

$email = $_POST['email'];
$ww = $_POST['wachtwoord'];
$wachtwoord = MD5($ww);

$sql = "SELECT * FROM  gebruikers WHERE email='$email' AND wachtwoord='$wachtwoord'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

    while ($row =  mysqli_fetch_assoc($result))
    {
        $id = $row["gebruikersid"];
        $email = $row["email"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
    }
    header("Location: test.php");
}
else{
    echo "Email of wachtwoord incorrect";
}


?>