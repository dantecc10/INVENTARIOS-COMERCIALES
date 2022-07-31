var PrecioL, PrecioML, PrecioMS;
const Envío = 230, DivisorDecimalML = .75, DivisorDecimalMS = .85;;

function CálculoAsistidoDePrecios(PrecioL, PrecioML, PrecioMS) {
    PrecioL = document.getElementById("InputPrecioL").value;
    console.log("Precio local = ", PrecioL);

    PrecioML = (PrecioL + Envío) / DivisorDecimalML;
    PrecioMS = (PrecioL + Envío) / DivisorDecimalMS;

    console.log("Precio Mercado Libre = ", PrecioML);
    console.log("Precio Mercado Shops = ", PrecioMS);

    document.getElementById("InputPrecioML").value = PrecioML;
    document.getElementById("InputPrecioMS").value = PrecioMS;
}