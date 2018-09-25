<?php
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo']))
{
    if ($_SESSION['Ruolo'] == 'Ospite')
        $ruolo = 'Ospite';
    else
        $ruolo = 'Amministratore';
}
?>

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
<body onload="selection('Ruoli');">
    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Ruoli</a>
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
                <div class="form-group has-feedback">
<<<<<<< HEAD
                    <div class="search-control">
                    <input type="search" id="research"  onkeyup='Ricerca("Ruoli");' name="q" placeholder="Cerca">
                    <button id="research"  onclick='RicercaFiltro("Ruoli");' >Search</button>
                </div>
                </div>
=======
                <form action="Admin.php">       
                    <input type='text' id='research' class='form-control' onkeyup='Ricerca();' placeholder='Cerca...'> 
                    <button type='submit' style="margin: 5px"  class='btn btn-primary'><span class='glyphicon glyphicon-arrow-left'></span></button> 
                    <button style="margin: 5px" class='btn btn-primary' name='LogOut' data-toggle='modal'  onclick='LogOut();'><span class='glyphicon glyphicon-log-out'></span></button>     
                    </form> 
>>>>>>> ba0c8956419a69de0392488edba93d5fbd9c4091
            </ul>
            </div>
        </div>
    </nav>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- contenuto form modale-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p id="titolo"></p>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control"  name="IdRuoli" id="IdRuoli" placeholder="IdRuoli" required>
                        <br>
                        <label for="DescrizioneRuolo">Descrizione Ruolo:</label>
                        <input type="text" class="form-control" name="DescrizioneRuolo" id="DescrizioneRuolo" placeholder="DescrizioneRuolo" required>
                        <br>                             
                    </div>
                    <div class="modal-footer">
                        <br>
                        <br>
                        <button type="button" class="btn btn-success" id="insert" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> Inserisci</button>
                        <button type="button" class="btn btn-danger" id="annulla" onclick="annulla();" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annulla </button>
                        <p class="alert alert-danger" id="error" hidden></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <p class="alert alert-info" id="info" hidden></p>
        <table class="table table-hover" id="id_table">
        </table>
    </div>
    <p id="prova" class="hidden"></p>
</body>
</html>
<?php }
else
{
    include("Logout.php");
}?>