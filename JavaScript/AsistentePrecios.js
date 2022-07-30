var PrecioL, PrecioML, PrecioMS;
const Envío = 230, DivisorDecimal = .75;

function CálculoAsistidoDePrecios(PrecioL, PrecioML, PrecioMS) {
    PrecioL = parseFloat(document.getElementById("InputPrecioL").ariaValueText);
    console.log("Precio local = ", PrecioL);

    PrecioML = (PrecioL + Envío) / DivisorDecimal;
    PrecioMS = (PrecioL + Envío) / DivisorDecimal;

    console.log("Precio Mercado Libre = ", PrecioML);
    console.log("Precio Mercado Shops = ", PrecioMS);

    document.getElementById("InputPrecioML").setAttribute = (value, PrecioML);
    document.getElementById("InputPrecioMS").textContent = PrecioMS;
}