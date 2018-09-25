<?php
session_start();
if(isset($_SESSION['NomeUtente']) && isset($_SESSION['Ruolo'])){
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
<body onload="selection('Prodotti');">
    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Prodotti</a>
            </div>
            <div class="container">
            <ul class="nav navbar-form navbar-right">
                <div class="form-group has-feedback">
                    <input type='text' id='research' class='form-control' onkeyup='Ricerca();' placeholder='Cerca...'>

                    <i class="glyphicon glyphicon-search form-control-feedback"></i>
                </div>
            </ul>
            </div>
        </div>
    </nav>
    <button type='submit' class='btn btn-primary' name='LogOut' data-toggle='modal'  onclick='LogOut()'><span class='glyphicon glyphicon-log-out'></span></button>
    <div class="container" style="align-right" id="mostra">                      
    <?php if($ruolo == 'Amministratore'){?>
        <button type="submit" class="btn success" data-toggle="modal" data-target="#myModal" onclick="formAggiungi('Prodotti');"><span class="glyphicon glyphicon-plus"></span></button>
        <button type='submit' class='btn btn-danger' name='btnDelete' onclick='cancella("Prodotti");'><span class='glyphicon glyphicon-minus'></span></button>
        <button type='submit' class='btn btn-primary' name='btnUpdate' data-toggle='modal' data-target='#myModal' onclick="formAggiorna(IdMagazzino, 'Prodotti');"><span class='glyphicon glyphicon-pencil'></span></button>
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
                    <div class="modal-body">
                        <label for="Descrizione">Descrizione:</label>
                        <input type="text" class="form-control" name="Descrizione" id="Descrizione" placeholder="Descrizione" required>
                        <br>
                        <label for="Prezzo">Prezzo:</label>
                        <input type="text" class="form-control" name="Prezzo" id="Prezzo" placeholder="Prezzo" required>
                        <br>
                        <label for="QuantitaDisponibile">Quantita:</label>
                        <input type="text" class="form-control" name="QuantitaDisponibile" id="QuantitaDisponibile" placeholder="Quantita Disponibile" required>
                        <label for="IdMagazzino">Magazzino:</label>
                        <select id="IdMagazzino">
                        <?php 
                            include("config.php");
                            $sql = "SELECT DescrizioneMagazzino, IdMagazzino FROM magazzino";
                            $stmt = $db->prepare($sql);
                            $stmt-> execute();         
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                            {
                                ?>
                                <option value="<?php echo $row['IdMagazzino']?>"> <?php echo $row['DescrizioneMagazzino']?> </option> <?php
                            }                      
                    ?>  
                    </select>                     
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
        <span class="glyphicon glyphicon-info-sign" onmouseover="info();" onmouseout="resetInfo();" id="information"></span>
        <br>
        <p class="alert alert-info" id="info" hidden></p>
        <table class="table table-hover" id="id_table">
        </table>
    </div>
    <p id="prova" class="hidden"></p>
</body>
</html>
<?php 
}else
{
    include("Logout.php");
}?>