    document.getElementById('results').style.display = 'none'
document.getElementById('loan-form').addEventListener('submit', (e) => {
    document.getElementById('results').style.display = 'none'
    document.getElementById('loading').style.display = 'block'
    setTimeout(calculateResults, 2000);
    e.preventDefault();
})
function calculateResults() {
    console.log('Calculating');
    const ammount = document.getElementById('ammount');
    const interest = document.getElementById('interest');
    const years = document.getElementById('years');
    const monlthlyPayment = document.getElementById('monthly-payment');
    const totalPayment = document.getElementById('total-payment');
    const totalInterest = document.getElementById('total-interest');
    const principal = parseFloat(ammount.value);
    const calculatedInterest = parseFloat(interest.value / 100 / 12);
    const calculatedPayments = parseFloat(years.value) * 12;
    const x = Math.pow(1 + calculatedInterest, calculatedPayments);
    const monthly = (principal * x * calculatedInterest) / (x - 1);
    if (isFinite(monthly)) {
        monlthlyPayment.value = monthly.toFixed(2)
        totalPayment.value = (monthly * calculatedPayments).toFixed(2)
        totalInterest.value = ((monthly * calculatedPayments) - principal).toFixed(2)
        document.getElementById('results').style.display = 'block'
        document.getElementById('loading').style.display = 'none'
    } else {
        showError('Check your numbers')

    }
}
function showError(error) {
    document.getElementById('results').style.display = 'none'
    document.getElementById('loading').style.display = 'none'
    const errorDiv = document.createElement('div');
    const card = document.querySelector('.card')
    const heading = document.querySelector('.heading')
    errorDiv.className = 'alert alert-danger';
    errorDiv.appendChild(document.createTextNode(error))
    card.insertBefore(errorDiv, heading)
    setTimeout(ClearError, 3000);
}
function ClearError() {
    document.querySelector('.alert').remove()
}