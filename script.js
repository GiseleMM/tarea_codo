let saldo = 300_000;
let clave = 1234;
let usuario = "Test Cajero";

let buffer = "";
let operacion = "";
let monto = 0;//para extraccion y deposito

let logeado = false;//controla la clave
let continuar = true;//controla la operacion sobre cajaro

for (let index = 0; index < 3; index++) {
    buffer = prompt("Ingrese clave(1234)");
    if (buffer.trim() == 1234) {
        logeado = true;
        break;
    } else {
        alert("clave invalida");
    }

}
if (logeado) {
    alert("Bienvenido usuario: " + usuario);
    do {
        operacion = prompt("\n Seleccione operacion a realizar:\n 1-Ver saldo\n 2-Depositar\n 3-Extraer\n4-Salir").trim();
        switch (operacion) {
            case "1":
                alert("USUARIO: " + usuario + " SALDO:" + saldo);

                break;
            case "2":
                monto = prompt("Ingrese monto a depositar").trim();
                monto = Number(monto);
                if (isNaN(monto) || monto < 0) {
                    alert("monto no valido");
                } else {
                    saldo = saldo + monto;
                    alert("DEPOSITO REALIZADO USUARIO: " + usuario + " SALDO:" + saldo);
                }
                break;
            case "3":
                monto = prompt("Ingrese monto a extraer").trim();
                monto = Number(monto);
                if (isNaN(monto) || monto < 0 || monto > saldo) {
                    alert("monto no valido");
                } else {
                    saldo = saldo - monto;
                    alert("EXTRACCION REALIZADA USUARIO: " + usuario + " SALDO:" + saldo);
                }

                break;
            case "4":
                alert("Gracias por usar la aplicacion");
                continuar = false;
                break;
            default:
                alert("Operacion invalida");
                break;
        }

    } while (continuar);


} else {

    alert("usuario no encontrado, retire tarjeta y vuelva a ingresar la clave");
}
