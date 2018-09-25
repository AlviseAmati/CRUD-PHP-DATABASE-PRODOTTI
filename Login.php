<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" >
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
</head>
<body>
<form action="PassaggioLogin.php" method="POST">
    <div class="row">
        <div class="col-xs-12" align="center"><h3>INSERISCI I DATI</h3></div>
        <br>
      <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 form-inline" >  
      <input type="hidden" name="controllobot">               
            <div class="form" align ="center">
                <br>
                <label for="username"><h4>Username:</h4></label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Nome Utente" required>
                <br><br>
            </div>
            <div class="form" align ="center">
                <label for="username"><h4>Password:</h4></label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                <br><br>
            </div>
            <button type="submit" id = "miopulsante" class="btn btn-primary"> Accedi </button>
        </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
if (isset($_GET['errore']))
{
    $errore= $_GET["errore"];
    if($errore == 1)
    {
         echo "<div class='container'><div class='form-control' align=center>Login fallito, password o username errate</div></div>" ;  
    }
    else if($errore==2)
    {
    echo "<div class='container'><div class='form-control' align=center>Login fallito, non sei abilitato </div></div>" ;    
    }
}
?>