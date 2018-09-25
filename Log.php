<?php 
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']))
{
    if(!isSet($_GET['page'])) $page=1;
    else $page=$_GET['page']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Sorter.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/Research.js"></script>
    <script language="JavaScript" type="text/JavaScript" src="scripts/AJAX.js"></script>
</head>
<?php echo "<body onload=selectLog('SelectLog.php?page=$page');>"; ?>
<form>
    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Log</a>
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
                <div class="form-group has-feedback">                       
                    <input type='text' id='research' onkeyup='Ricerca();' placeholder='Cerca...'>                   
                    <button class='btn btn-primary' id='btnCerca' class='form-control' onclick="Filter();"> <span class='glyphicon glyphicon-search'></span> </button>                
                    <button type='submit' style="margin: 5px"  class='btn btn-primary' onclick="window.location.href='Admin.php';"><span class='glyphicon glyphicon-arrow-left'></span></button> 
                    <button type='submit' class='btn btn-primary' name='LogOut' data-toggle='modal'  onclick='LogOut()'><span class='glyphicon glyphicon-log-out'></span></button>            
                </div>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <p class="alert alert-info" id="info" hidden></p>
        <div id="tabella">
        </div>
    </div>
    <p id="prova" class="hidden"></p>
</form>
</body>
</html>
<?php 
}
else
{
    include("Logout.php");
}?>