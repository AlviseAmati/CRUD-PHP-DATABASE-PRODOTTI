<?php
session_start();
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
<body onload="selection();">
    <!-- navbar -->
    <nav class="navbar navbar-inverse" id="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">TabellaCRUD</a>
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
    <div class="container" style="align-right" id="mostra">
    <?php 
    if($_SESSION["IdRuolo"] == 2)
    {     
        echo "<button type='submit' class='btn success' data-toggle='modal' data-target='#myModal' onclick='formAggiungi();'><span class='glyphicon glyphicon-plus'></span></button>
        <button type='submit' class='btn btn-danger' name='btnDelete' onclick='cancella();'><span class='glyphicon glyphicon-minus'></span></button></td>
        <button type='submit' class='btn btn-primary' name='btnUpdate' data-toggle='modal' data-target='#myModal' onclick='formAggiorna();'><span class='glyphicon glyphicon-pencil'></span></button></td>";
    }
      ?>
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
                        <label for="ds">Descrizione:</label>
                        <input type="text" class="form-control" name="descrizione" id="descrizione" placeholder="Prodotto" required>
                        <br>
                        <label for="prz">Prezzo:</label>
                        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="Prezzo" required>
                        <br>
                        <label for="qt">Quantita:</label>
                        <input type="text" class="form-control" name="quantita" id="quantita" placeholder="Numero pezzi" required>
                        <br>
                        <!--<label for="mg">IdMagazzino:</label>
                        <input type="text" class="form-control" name="magazzino" id="magazzino" placeholder="Magazzino" required>
                        -->
                        <label for="mg">IdMagazzino:</label>
                        <input type = "text" name ="magazzino" placeholder ="IdMagazzino" required list ="magazzini"/>
                        <datalist id = "magazzini">
                        <?php
                        include("config.php");
                        $sql = "SELECT DescrizioneMagazzino FROM magazzino";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                            ?>
                            <option value ="<?php 
                            echo $row['DescrizioneMagazzino']?>"><?php
                        }
                        ?>
                        
                    
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
        <table class="table table-hover" id="id_table">
        </table>
    </div>
    <p id="prova" class="hidden"></p>
</body>
</html>