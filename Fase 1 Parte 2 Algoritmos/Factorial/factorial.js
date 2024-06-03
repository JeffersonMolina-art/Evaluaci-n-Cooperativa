function calculateFactorial() {
    var number = parseInt(document.getElementById('numberInput').value);
    if (isNaN(number) || number < 0 || Math.floor(number) !== number) {
        document.getElementById('result').innerText = "Porfavor ingresar numero positivo.";
        return;
    }
    var factorial = 1;
    for (var i = number; i > 1; i--) {
        factorial *= i;
    }

    document.getElementById('result').innerText = number + "! = " + factorial;
}