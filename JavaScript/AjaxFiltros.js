var ModoFiltro;
function FiltrarProductos() {
    var ID = document.getElementById("CampoFiltroID").value;
    var Marca = document.getElementById("CampoFiltroMarca").value;
    var LíneaSerie = document.getElementById("CampoFiltroLíneaSerie").value;
    var Modelo = document.getElementById("CampoFiltroModelo").value;
    var Barras = document.getElementById("CampoFiltroBarras").value;
    var SKU = document.getElementById("CampoFiltroSKU").value;
    if (ID == "" && Marca == "" && LíneaSerie == "" && Modelo == "" && Barras == "" && SKU == "") {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    } else {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Filtrar.php";
        urlVariables = ("?ID=" + ID + "&Marca=" + Marca + "&LíneaSerie=" + LíneaSerie + "&Modelo=" + Modelo + "&Barras=" + Barras + "&SKU=" + SKU + "&ModoFiltro=" + ModoFiltro);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
}