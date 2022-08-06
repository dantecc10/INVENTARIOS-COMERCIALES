str = document.getElementById("DesplegableIDs").value;
console.log(str);
function mostrarProducto(str) {
  if (str == "") {
    document.getElementById("DivTablaID").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("DivTablaID").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "buscarID.php?q=" + str, true);
    xmlhttp.send();
  }
}