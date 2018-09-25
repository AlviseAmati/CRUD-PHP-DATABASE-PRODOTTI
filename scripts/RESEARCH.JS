function Ricerca(tabella)
{
    //colora le celle dove trova la stringa passata
    Reset();
    var stringa = document.getElementById("research").value.toUpperCase();
    if(stringa!="" && stringa!=".") {
        var table = document.getElementById("id_table");
        var celle = table.getElementsByTagName("td");
        for (var j = 0; j < celle.length; j++) {
            if (celle[j].innerHTML.toUpperCase().search(stringa) !== -1 && celle[j].innerHTML.toUpperCase().search("<") === -1) {
                celle[j].style.backgroundColor = "#99ddff";
            }
        }
    }
    else 
        $("#id_table").load("Select.php?tabella=" + tabella);
}

function RicercaFiltro(tabella)
{
    var stringa = document.getElementById("research").value.toUpperCase();
    $("#id_table").load("Select.php?tabella=" + tabella + "&Ricerca=" + 1 + "&Valore=" + stringa);
}

function Reset() {
    //imposta tutte le celle al colore bianco
    var table = document.getElementById("id_table");
    var celle = table.getElementsByTagName("td");
    for(var j=0; j<celle.length; j++){
            celle[j].style.backgroundColor="white";
    }
}

function Filter(){
    var stringa = document.getElementById("research").value;
    if(stringa!="" && stringa!=".") {
        $("#id_table").load("Filter.php?stringa=" + stringa);
    }
}
