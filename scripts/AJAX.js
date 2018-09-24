function selection(tabella){
    if(tabella == 'SelectLog.php')
        $("#id_table").load("SelectLog.php");
    else
        $("#id_table").load("Select.php?tabella=" + tabella);
    $("#id_table").hide();
    $("#id_table").fadeIn(1000);
}

function update(IdProdotti, tabella, Descrizione, Prezzo, QuantitaDisponibile, IdMagazzino) 
{
        $("#prova").load("Updated.php?Id=" + IdProdotti + "&Descrizione=" + Descrizione + "&Prezzo=" + Prezzo + "&QuantitaDisponibile=" + QuantitaDisponibile + "&IdMagazzino=" + IdMagazzino , function () {
            $("#error").hide();
            $("#id_table").load("Select.php?tabella=" + tabella);
        });   
}

function updateMagazzino(IdMagazzino, tabella, DescrizioneMagazzino, Ubicazione) 
{
        $("#prova").load("Updated.php?Id=" + IdMagazzino + "&DescrizioneMagazzino=" + DescrizioneMagazzino + "&Ubicazione=" + Ubicazione , function () {
            $("#error").hide();
            $("#id_table").load("Select.php?tabella=" + tabella);
        });   
}

function updateUtenti(IdUtenti,tabella,NomeUtente, Passwords,Nome,Cognome,Mail,DataNascita, Eta,Indirizzo,CodiceFiscale,IdRuoli)
{
        $("#prova").load("Updated.php?Id=" + IdUtenti + "&NomeUtente=" + NomeUtente + "&Passwords=" + Passwords+ "&Nome=" + Nome+ "&Cognome=" + Cognome + "&Mail=" + Mail+ "&DataNascita=" + DataNascita + "&Eta=" + Eta+ "&Indirizzo=" + Indirizzo+ "&CodiceFiscale=" + CodiceFiscale+ "&IdRuoli=" + IdRuoli, function () {
            $("#error").hide();
            $("#id_table").load("Select.php?tabella=" + tabella);
        });   
}

function cancella(tabella){
    Id=$("input[name='seleziona']:checked").val();
    if(tabella == 'Prodotti')
    {
        $("#prova").load("Delete.php?Id=" + Id + "&tabella=" + tabella, function () {
            $("#id_table").load("Select.php?tabella=" + tabella);
        });
    }

    if(tabella == 'Magazzini')
    {
        $("#prova").load("Delete.php?Id=" + Id + "&tabella=" + tabella, function () {
            $("#id_table").load("Select.php?tabella=" + tabella);
        });
    }

    if(tabella == 'Utenti')
    {
        $("#prova").load("Delete.php?Id=" + Id + "&tabella=" + tabella, function () {
            $("#id_table").load("Select.php?tabella=" + tabella);
        });
    }
}

function LogOut(){
    $("#prova").load("PassaggioLogin.php?LogOut=" + 1, function () { 
        Redirect();
    });
}

function aggiungiProdotto(Descrizione, Prezzo, QuantitaDisponibile, IdMagazzino){ 
        $("#prova").load("AddRecord.php?Descrizione=" + Descrizione +  "&Prezzo=" + Prezzo + "&QuantitaDisponibile=" + QuantitaDisponibile + "&IdMagazzino=" + IdMagazzino, function () {
            selection('Prodotti');
            $("#error").hide();
        });
}

function aggiungiMagazzino(DescrizioneMagazzino, Ubicazione){ 
    $("#prova").load("AddRecord.php?DescrizioneMagazzino=" + DescrizioneMagazzino + "&Ubicazione=" + Ubicazione, function () {
        selection('Magazzini');
        $("#error").hide();
    });
}

function aggiungiUtente(NomeUtente, Passwords,Nome,Cognome,Mail,DataNascita,Eta,Indirizzo,CodiceFiscale,IdRuoli){ 
    $("#prova").load("AddRecord.php?NomeUtente=" + NomeUtente + "&Passwords=" + Passwords + "&Nome=" + Nome + "&Cognome=" + Cognome + "&Mail=" + Mail + "&DataNascita=" + DataNascita + "&Eta=" + Eta + "&Indirizzo=" + Indirizzo + "&CodiceFiscale=" + CodiceFiscale + "&IdRuoli=" + IdRuoli, function () {
        selection('Utenti');
        $("#error").hide();
    });
}

function annulla(){
    $("#error").hide();
}

function Redirect(){
    window.location.href = 'Login.php';
}

function formAggiorna(IdMagazzino,tabella)
{
    if(tabella == 'Prodotti')
    {
        Id=$("input[name='seleziona']:checked").val();
        children=$("input[name='seleziona']:checked").parent().parent().children();
        Descrizione=children.eq(1).html();
        Prezzo=children.eq(2).html();
        QuantitaDisponibile=children.eq(3).html();
        IdMagazzino = children.eq(4).html();
        $("#insert").unbind();
        $("#titolo").text("Modifica Prodotto");
        $("#Descrizione").val(Descrizione);
        $("#Prezzo").val(Prezzo);
        $("#QuantitaDisponibile").val(QuantitaDisponibile);
        $("#IdMagazzino").val(IdMagazzino);
        $("#insert").click(function(){
            update(Id,tabella, $('#Descrizione').val(), $('#Prezzo').val(),$('#QuantitaDisponibile').val(),$('#IdMagazzino').val());
    });
    }

    else if(tabella == 'Magazzini')
    {
        Id=$("input[name='seleziona']:checked").val();
        children=$("input[name='seleziona']:checked").parent().parent().children();
        DescrizioneMagazzino=children.eq(1).html();
        Ubicazione=children.eq(2).html();
        $("#insert").unbind();
        $("#titolo").text("Modifica Prodotto");
        $("#DescrizioneMagazzino").val(DescrizioneMagazzino);
        $("#Ubicazione").val(Ubicazione);
        $("#insert").click(function(){
            updateMagazzino(Id,tabella, $('#DescrizioneMagazzino').val(), $('#Ubicazione').val());
        });
    }

    else if(tabella == 'Utenti')
    {
        Id=$("input[name='seleziona']:checked").val();
        children=$("input[name='seleziona']:checked").parent().parent().children();
        NomeUtente=children.eq(1).html();
        Passwords=children.eq(2).html();
        Nome=children.eq(3).html();
        Cognome=children.eq(4).html();
        Mail=children.eq(5).html();
        DataNascita=children.eq(6).html();
        Eta=children.eq(7).html();
        Indirizzo=children.eq(8).html();
        CodiceFiscale=children.eq(9).html();
        IdRuoli=children.eq(10).html();
        $("#insert").unbind();
        $("#titolo").text("Modifica Prodotto");
        $("#NomeUtente").val(NomeUtente);
        $("#Passwords").val(Passwords);
        $("#Nome").val(Nome);
        $("#Cognome").val(Cognome);
        $("#Mail").val(Mail);
        $("#DataNascita").val(DataNascita);
        $("#Eta").val(Eta);
        $("#Indirizzo").val(Indirizzo);
        $("#CodiceFiscale").val(CodiceFiscale);
        $("#IdRuoli").val(IdRuoli);
        $("#insert").click(function(){
            updateUtenti(Id,tabella, $('#NomeUtente').val(), $('#Passwords').val(), $('#Nome').val(), $('#Cognome').val(), $('#Mail').val(), $('#DataNascita').val(), $('#Eta').val(), $('#Indirizzo').val(), $('#CodiceFiscale').val(), $('#IdRuoli').val());
        });
    }
}

function formAggiungi(){
    $("#insert").unbind();
    $("#Descrizione").val("");
    $("#Prezzo").val("");
    $("#QuantitaDisponibile").val("");
    $('#IdMagazzino').val("")
    $("#titolo").text("Aggiungi un prodotto");
    $("#insert").click(function(){
        aggiungiProdotto($('#Descrizione').val(), $('#Prezzo').val(),$('#QuantitaDisponibile').val(),$('#IdMagazzino').val());
    });
}
function formAggiungiMagazzino (){
    $("#insert").unbind();
    $("#DescrizioneMagazzino").val("");
    $("#Ubicazione").val("");
    $("#titolo").text("Aggiungi un magazzino");
    $("#insert").click(function(){
        aggiungiMagazzino($('#DescrizioneMagazzino').val(),$('#Ubicazione').val());
    });
}

function formAggiungiUtente (){
    $("#insert").unbind();
    $("#NomeUtente").val("");
    $("#Passwords").val("");
    $("#Nome").val("");
    $("#Cognome").val("");
    $("#Mail").val("");
    $("#DataNascita").val("");
    $("#Eta").val("");
    $("#Indirizzo").val("");
    $("#CodiceFiscale").val("");
    $("#IdRuoli").val("");
    $("#titolo").text("Aggiungi un Utente");
    $("#insert").click(function(){
        aggiungiUtente($('#NomeUtente').val(),$('#Passwords').val(),$('#Nome').val(),$('#Cognome').val(),$('#Mail').val(),$('#DataNascita').val(),$('#Eta').val(),$('#Indirizzo').val(),$('#CodiceFiscale').val(),$('#IdRuoli').val());
    });
}

function info() {
    //imposta il contenuto del paragrafo info sull'evento onmouseover
    $('#info').show();
    $('#info').text('Occorre premere sulla rispettiva colonna');
}

function resetInfo(){
    //cancella il contenuto del paragrafo info sull'evento onmouseout
    $('#info').hide();
    $('#info').text('');
}
