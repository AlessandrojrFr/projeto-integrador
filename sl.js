document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const selectedOption = document.querySelector('input[name="payment"]:checked');
    const paymentResult = document.getElementById('payment-result');

    if (selectedOption) {
        const paymentMethod = selectedOption.value;
        paymentResult.textContent = `Você escolheu pagar com ${paymentMethod}`;
    } else {
        paymentResult.textContent = 'Por favor, escolha uma opção de pagamento.';
    }
});
