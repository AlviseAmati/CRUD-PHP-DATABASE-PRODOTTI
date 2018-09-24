<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
</head>
<body>
<form action="PassaggioLogin.php" method="POST">
    <div class="row" align="center">
        <div class="col-xs-12" align="center"><h3>INSERISCI I DATI</h2></div>
        <br>
      <div class="col-xs-5 col-sm-4 col-md-4 col-xs-offset-4 form-inline" >                 
            <div class="form">
                <br>
                <label for="username"><h4>Username:</h4></label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Nome Utente" required>
                <br><br>
            </div>
            <div class="form">
                <label for="username"><h4>Password:</h4></label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                <br><br>
            </div>
            <button type="submit" class="btn btn-primary"> Accedi </button>
        </div>
        </div>
    </div>
</form>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
