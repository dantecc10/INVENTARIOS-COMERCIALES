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
        urlVariables = ("?ID=" + ID + "&Marca=" + Marca + "&LíneaSerie=" + LíneaSerie + "&Modelo=" + Modelo + "&Barras=" + Barras + "&SKU=" + SKU);
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
function FiltroID() {
    var ID = document.getElementById("CampoFiltroID").value;
    if (ID != "" || ID != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarID.php";
        urlVariables = ("?ID=" + ID);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}

function FiltroMarca() {
    var Marca = document.getElementById("CampoFiltroMarca").value;
    if (Marca != "" || Marca != null || Marca != "Todas") {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarMarca.php";
        urlVariables = ("?Marca=" + Marca);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroLíneaSerie() {
    var LíneaSerie = document.getElementById("CampoFiltroLíneaSerie").value;
    if (LíneaSerie != "" || LíneaSerie != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarLíneaSerie.php";
        urlVariables = ("?LíneaSerie=" + LíneaSerie);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroModelo() {
    var Modelo = document.getElementById("CampoFiltroModelo").value;
    if (Modelo != "" || Modelo != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarModelo.php";
        urlVariables = ("?Modelo=" + Modelo);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroBarras() {
    var Barras = document.getElementById("CampoFiltroBarras").value;
    if (Barras != "" || Barras != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarBarras.php";
        urlVariables = ("?Barras=" + Barras);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroSKU() {
    var SKU = document.getElementById("CampoFiltroSKU").value;
    if (SKU != "" || SKU != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "FiltrarSKU.php";
        urlVariables = ("?SKU=" + SKU);
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
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}