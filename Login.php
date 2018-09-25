<?php
session_start();
if ((isset($_POST['username']) && isset( $_POST['password'])) || isset($_GET['LogOut'])) 
{
    include("config.php");
    
    $sql = "SELECT NomeUtente, Passwords, DescrizioneRuolo FROM utenti INNER JOIN ruoli ON utenti.IdRuoli=ruoli.IdRuoli WHERE NomeUtente=:username AND Passwords=:passwords";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    $stmt->bindParam(':passwords', md5($_POST['password']), PDO::PARAM_STR);
    $stmt-> execute();
    $row =$stmt->fetch(PDO::FETCH_ASSOC);

    if($row){
        $DataOra = date ("d/m/Y G:i");
        $_SESSION['NomeUtente'] = filter_var($row['NomeUtente'], FILTER_SANITIZE_STRING);
        $_SESSION['Ruolo'] = filter_var($row['DescrizioneRuolo'], FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO logoperazioni (IdNome, DataOra, DescrizioneOperazione) VALUES(:nomeutente,:dataora,:descrizioneoperazione)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nomeutente', $_SESSION['NomeUtente'], PDO::PARAM_STR);
        $stmt->bindParam(':dataora', $DataOra, PDO::PARAM_STR);
        $stmt->bindParam(':descrizioneoperazione', $DescrizioneOperazione, PDO::PARAM_STR);
        $stmt->execute();
        
        if($_SESSION['Ruolo'] == 'Ospite')
            header('location:Crud.php');
        else
            header('location:Admin.php');
    }
    else{
        session_destroy();
        header("location:Login.php?error=1");
    }
}
?>

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
<form action="Login.php" method="POST">
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
                <button type="submit" class="btn btn-primary" id="miopulsante"> Accedi </button>
            </div>
            
        </div>
    </div>
</form>
</body>
</html>
<?php
if (isset($_GET['error']))
{
    $errore= $_GET["error"];
    if($errore == 1)
    {
         echo("<br>");
         echo("<br>");
         echo "<div class='container'><div id ='container1' class='form-control' align=center>Login fallito, password o username errate</div></div>" ;  
    }
    else if($errore==2)
    {
        echo("<br>");
        echo("<br>");
        echo "<div class='container'><div id ='container1' class='form-control' align=center>Login fallito, non sei abilitato </div></div>" ;    
    }
}
?>