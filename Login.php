<?php
session_start();
if ((isset($_POST['username']) && isset( $_POST['password'])) || isset($_GET['LogOut'])) 
{
    include("config.php");
    
    $sql = "SELECT NomeUtente, Passwords, DescrizioneRuolo FROM utenti INNER JOIN ruoli ON utenti.IdRuoli=ruoli.IdRuoli WHERE NomeUtente=:username AND Passwords=:passwords";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    $stmt->bindParam(':passwords', $_POST['password'], PDO::PARAM_STR);
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/AJAX.js"> </script>
</head>
<body>
<form action="Login.php" method="POST">
    <div class="row" align="center">
        <div class="col-xs-11" align="center"><h1>INSERISCI I DATI</h1></div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-xs-offset-1" >                 
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Inserisci qui il tuo nome utente" required>
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Inserisci qui la tua password" required>
            </div>
            <button type="submit" class="btn btn-primary"> Accedi </button>
            <p id="error"><?php if(isSet($_GET['error'])) echo '<script>', 'errorLogin();', '</script>'; ?></p>
        </div>
    </div>
</form>
</body>
</html>
