<?php
session_start();
if(isset($_SESSION['Verifica']) && $_SESSION['Ruolo'] == 'Amministratore')
{
if(isset($_SESSION['IdUtente']) && isset($_SESSION['Password']))
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
<body onload="selection('Utenti');">
    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Utenti</a>
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
            <form action="Admin.php">       
                    <input type='text' id='research' class='form-control' onkeyup='Ricerca();' placeholder='Cerca...'> 
                    <button type='submit' style="margin: 5px"  class='btn btn-primary'><span class='glyphicon glyphicon-arrow-left'></span></button> 
                    <button style="margin: 5px" class='btn btn-primary' name='LogOut' data-toggle='modal'  onclick='LogOut();'><span class='glyphicon glyphicon-log-out'></span></button>     
                    </form> 
            </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="align-right" id="mostra">
    <div style = "    display: -webkit-flex;
    -webkit-flex-direction: row;
    display: flex;
    flex-direction: row; "> 
    
     <?php if($ruolo == 'Amministratore'){?> 
        <form action="Admin.php">              
        </form> 
        </div> <br>
        <button type="submit" class="btn success" data-toggle="modal" data-target="#myModal" onclick="formAggiungiUtente('Utenti');"><span class="glyphicon glyphicon-plus"></span></button>
        <button type='submit' class='btn btn-danger' name='btnDelete' onclick='cancella("Utenti");'><span class='glyphicon glyphicon-minus'></span></button>
        <button type='submit' class='btn btn-primary' name='btnUpdate' data-toggle='modal' data-target='#myModal' onclick="formAggiorna(IdUtente, 'Utenti');"><span class='glyphicon glyphicon-pencil'></span></button>
    <?php } ?>
        <!-- form modale per Aggiungi-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- contenuto form modale-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p id="titolo"></p>
                    </div>
                    <form id="form">
                    <div class="modal-body">
                        <input type="hidden" class="form-control"  name="IdUtente" id="IdUtente" required>
                        <br>
                        <label for="NomeUtente">Nome Utente:</label>
                        <input type="text" class="form-control" name="NomeUtente" id="NomeUtente" placeholder="Nome Utente" required>
                        <br>
                        <label for="Password">Password:</label>
                        <input type="password" class="form-control" name="Passwords" id="Passwords" placeholder="Passwords" required>     
                        <label for="Nome">Nome:</label>
                        <input type="text" class="form-control" name="Nome" id="Nome" placeholder="Nome" required>   
                        <label for="Cognome">Cognome:</label>
                        <input type="text" class="form-control" name="Cognome" id="Cognome" placeholder="Cognome" required>   
                        <label for="Mail">Email:</label>
                        <input type="Email" class="form-control" name="Mail" id="Mail" placeholder="Mail" required>   
                        <label for="DataNascita">Data Nascita:</label>
                        <input type="date" min="01/01/1900" max="01/01/2018" class="form-control" name="DataNascita" id="DataNascita" placeholder="Data Nascita" required>           
                        <label for="Indirizzo">Indirizzo:</label>
                        <input type="text" class="form-control" name="Indirizzo" id="Indirizzo" placeholder="Indirizzo" required>             
                        <label for="CodiceFiscale">Codice Fiscale:</label>
                        <input type="text" class="form-control" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"
                                 name="CodiceFiscale" id="CodiceFiscale" placeholder="Codice Fiscale" required>             
                        <label for="IdRuoli">Ruoli:</label>
                        <select class="form-control" id = 'IdRuoli'> <option value='1'> Ospite </option> <option value='2'> Amministratore </option> </select> 
                        <label for="Abilitazione">Abilitazione:</label>
                        <select class="form-control" id = 'Abilitazione'> <option value='0'> Disabilitato </option> <option value='1'> Abilitato </option> </select>                              
                    
                    </div>
                    <div class="modal-footer">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success" id="insert" ><span class="glyphicon glyphicon-ok"></span> Inserisci</button>
                        <button type="button" class="btn btn-danger" id="annulla" onclick="annulla();" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annulla </button>
                        <p class="alert alert-danger" id="error" hidden></p>
                    </div>
                    </form>
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
    <h2 align="center" style="color:red"><p id="prova" ></p>
</body>
</html>
<?php }
else
{
    echo "<script language='JavaScript'>\n"; 
    echo "alert('Accesso negato: torna indietro');\n"; 
    echo"window.location.href = 'Login.php';";
    echo "</script>"; 
}?>