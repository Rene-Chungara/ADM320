document.getElementById('calculateBtn').addEventListener('click', calculatePayment);

function calculatePayment() {
    var monto = parseFloat(document.getElementById('loanAmount').value);
    var interes = parseFloat(document.getElementById('interestRate').value);
    var plazo = parseInt(document.getElementById('loanTerm').value);
    var interesmensual = interes / 100 / 12;
    var totalplazo = plazo;
    var numerador = monto * interesmensual;
    var denominador = 1 - Math.pow(1 + interesmensual, -totalplazo);
    var MontoAPagar = numerador / denominador;
    var resultElement = document.getElementById('result');
    resultElement.innerHTML = '';
    if (isNaN(MontoAPagar)) {
        resultElement.innerHTML = 'Por favor, complete todos los campos.';
    } else {
        resultElement.innerHTML = 'El monto a pagar mensualmente es: ' + MontoAPagar.toFixed(2) + ' BS';
    }
}