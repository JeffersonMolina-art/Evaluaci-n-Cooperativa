function calcularAmortizacion() {
    var montoDado = parseFloat(document.getElementById('loanAmount').value);
    var periodoDado = parseInt(document.getElementById('loanTerm').value);
    var interesDado = parseFloat(document.getElementById('interestRate').value) / 100;
    
    var saldo = montoDado;
    var montosDePago = montoDado / periodoDado;
    var amortizationTable = document.getElementById('amortizationBody');
    amortizationTable.innerHTML = '';

    for (var i = 1; i <= periodoDado; i++) {
        var interes = saldo * interesDado;
        var totalPago = montosDePago + interes;
        var descuentoSaldo = montosDePago;

        saldo -= descuentoSaldo;

        var newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${i}</td>
            <td>${saldo.toFixed(2)}</td>
            <td>${interes.toFixed(2)}</td>
            <td>${descuentoSaldo.toFixed(2)}</td>
            <td>${totalPago.toFixed(2)}</td>
        `;
        amortizationTable.appendChild(newRow);
    }
}