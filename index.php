<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
</head>
<body class="framed">
                    <?php
                    include "connect/conn.php";
                    if(isset($_POST['email']) && isset($_POST['wachtwoord'])){
                        $username = $_POST['email'];
                        $password = md5($_POST['wachtwoord']);
                        $stmt = $db->prepare("SELECT * FROM gebruikers WHERE email='$username' AND wachtwoord='$password'");
                        $stmt->bindParam(1, $username);
                        $stmt->bindParam(2, $password);
                        $stmt->execute();
                        $row = $stmt->fetch();
                        $user = $row['email'];
                        $pass = $row['wachtwoord'];
                        $id = $row['gebruikersid'];
                        $type = $row['rollen'];
						
                        if ($username==$user && $pass==$password){
                            session_start();
                            $_SESSION['email'] = $user;
                            $_SESSION['wachtwoord'] = $pass;
                            $_SESSION['gebruikersid'] = $id;
                            $_SESSION['rollen'] = $type;
						}
                            ?>
                            <script type="text/javascript">
                                window.location.href='test.php'
                                </script>
                    <?php
					}else{
                            ?>
					<div class="wrapper">
  <div class="login">
        <form method="post" class="login_form">
          <div class="login_logo"></div>
		                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong>sdfghjkl.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    <?php
					}
					?>
          <div class="form-group">
            <input type="text" name="email" id="email" placeholder="E-Mail" class="form-control">
          </div>
          <div class="form-group">
            <input type="password"  name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord" class="form-control">
          </div>
          <div class="form-group login_action">
            <div class="checkbox login_remember">
              <input id="chb1" type="checkbox">
              <label for="chb1">Onthouden</label>
            </div>
            <div class="login_submit">
              <button type="submit" name="login" class="btn btn-default">Inloggen</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="gebruiker/libs/jquery/jquery.min.js"></script>
    <script src="gebruiker/ibs/bootstrap/js/bootstrap.min.js"></script>
    <script src="gebruiker/js/demo.js"></script>
  </body>
</html>

<?php

?>