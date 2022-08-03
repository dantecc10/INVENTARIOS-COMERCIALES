var NuevoID = (document.getElementsByClassName("CeldaParaID").length) - 1;
document.getElementById("InputID").value = NuevoID;

function CálculoAsistidoDePrecios() {
    var PrecioL = 0, PrecioML = 0, PrecioMS = 0;
    const Envío = 230, DivisorDecimalML = 0.75, DivisorDecimalMS = 0.85;

    PrecioL = parseFloat(document.getElementById("InputPrecioL").value);
    PrecioML = (((PrecioL + Envío) / DivisorDecimalML)).toFixed(2);
    PrecioMS = (((PrecioL + Envío) / DivisorDecimalMS)).toFixed(2);

    console.log("Precio local = ", PrecioL);
    console.log("Precio Mercado Libre = ", PrecioML);
    console.log("Precio Mercado Shops = ", PrecioMS);
    if (PrecioL != 0 || PrecioL != 0.00 || PrecioL != "") {
        document.getElementById("InputPrecioML").value = PrecioML;
        document.getElementById("InputPrecioMS").value = PrecioMS;
    }
    else {
        alert("Los precios locales no pueden ser $0.00...\nPor favor, introduzca un valor válido para el campo.");
        console.log("Ingresó un precio de $0, corríjalo...");
        document.getElementById("InputPrecioML").value = 0;
        document.getElementById("InputPrecioMS").value = 0;
    }
}
function LimpiarFiltros() {
    document.getElementById("CampoFiltroID").value = "";
    document.getElementById("CampoFiltroMarca").value = "";
    document.getElementById("CampoFiltroLíneaSerie").value = "";
    document.getElementById("CampoFiltroModelo").value = "";
    document.getElementById("CampoFiltroBarras").value = "";
    document.getElementById("CampoFiltroSKU").value = "";

}