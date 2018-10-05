<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rubixmarketing</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body class="framed">
<div class="wrapper">
    <div class="registratie">
        <form action="connect/registration_code.php" method="post" class="registratie__form">
            <div class="registratie__logo"></div>

            <fieldset class="form-border">
                <legend class="form-legend">Inlog gegevens</legend>

                <div class="input2">
                    <input type="text" name="authenticatiecode" id="code" placeholder="Authenticatiecode" class="form-control" >
                </div>

                <div class="input2">
                    <input type="text" name="email" id="email" placeholder="E-Mail" class="form-control" required>
                </div>

                <div class="input2">
                    <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord" class="form-control" required>
                </div>

            </fieldset>
            <fieldset class="form-border">
                <legend class="form-legend">Persoonlijke informatie</legend>
                <div class="input">

                    <input type="text" name="voornaam" id="voornaam" placeholder="Voor Naam" class="form-control" required>
                </div>

                <div class="input">
                    <h5 style="padding-left: 5px;">Geboortedatum:</h5>
                    <input type="date" name="geboortedatum" id="datepicker" class="form-control" >
                </div>

                <div class="input">

                    <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="Tussenvoegsel" class="form-control" >
                </div>

                <div class="input">

                    <input type="text" name="achternaam" id="achternaam" placeholder="Achter Naam" class="form-control" required>
                </div>

                <div class="input">
                    <input type="text" name="straat" id="straat" placeholder="Straat" class="form-control" >
                </div>

                <div class="input">
                    <input type="text" name="postcode" id="postcode" placeholder="Postcode" class="form-control" >
                </div>

                <div class="input">
                    <input type="text" name="woonplaats" id="woonplaats" placeholder="Woonplaats" class="form-control">
                </div>

                <div class="input">
                    <input type="text" name="provincie" id="provincie" placeholder="Provincie" class="form-control">
                </div>

                <div class="input">
                    <input type="text" name="mobiel" id="mobiel" placeholder="mobiel" class="form-control" required>
                </div>

                <div class="input">
                    <input type="text" name="telefoon" id="telefoon" placeholder="Telefoon" class="form-control">
                </div>

            </fieldset>
            <fieldset class="form-border">
                <legend class="form-legend">Gegevens stage</legend>
                <div class="input">
                    <h5 style="padding-left: 5px;">Begindatum:</h5>
                    <input type="date" name="datum" id="datum" placeholder="Datum" class="form-control" required>
                </div>

                <div class="input">
                    <h5 style="padding-left: 5px;">Einddatum:</h5>
                    <input type="date" name="datum" id="datum" placeholder="Datum" class="form-control" required>
                </div>

                <div class="input2">
                    <input type="text" name="aantaluren" id="aantaluren" placeholder="Aantaluren" class="form-control" required>
                </div>

                <div class="input2">
                    <input type="text" name="schoolinstelling" id="schoolinstelling" placeholder="Schoolinstelling" class="form-control" required>
                </div>

                <div class="input2">
                    <input type="text" name="contactpersoon" id="contactpersoon" placeholder="Contactpersoon" class="form-control" required>
                </div>

            </fieldset>
            <fieldset class="form-border">
                <legend class="form-legend">Betaal gegevens</legend>

                <div class="input2">
                    <input type="text" name="naambank" id="naambank" placeholder="Naam bank" class="form-control" required>
                </div>

                <div class="input2">
                    <input type="text" name="iban" id="iban" placeholder="Iban" class="form-control" required>
                </div>

            </fieldset>
            <fieldset class="form-border">
                <legend class="form-legend">Social media</legend>

                <div class="input2">
                    <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin" class="form-control">
                </div>

                <div class="input2">
                    <input type="text" name="facebook" id="facebook" placeholder="Facebook" class="form-control">
                </div>


            </fieldset>

            <div class="form-group registratie__action">

                <div class="registratie__submit" >
                    <button type="submit" name="registreer" class="btn btn-default">Registreer</button>
                </div>
            </div>

        </form>
    </div>
</div>
</body>
</html>

