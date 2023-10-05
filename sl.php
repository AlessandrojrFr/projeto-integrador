<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opção de Pagamento</title>
    <link rel="stylesheet" href="sl.css">
    <link rel="stylesheet" href="sl.js">
</head>
<body>
    <div class="container">
        <h1>Escolha seu método de pagamento</h1>
        <form id="payment-form">
            <div class="payment-options">
                <div class="payment-option">
                    <input type="radio" name="payment" id="credit-card" value="credit-card">
                    <label for="credit-card">Cartão de Crédito</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment" id="paypal" value="paypal">
                    <label for="paypal">PayPal</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment" id="bank-transfer" value="bank-transfer">
                    <label for="bank-transfer">Transferência Bancária</label>
                </div>
            </div>
            <button class="submit-button" type="button">Pagar Agora</button>
        </form>
        <div id="payment-result"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>
