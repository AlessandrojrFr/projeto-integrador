document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('accountForm').addEventListener('submit', function(event) {
        const novaSenha = document.getElementById('novaSenha').value;
        const confirmNovaSenha = document.getElementById('confirmNovaSenha').value;

        if (novaSenha !== confirmNovaSenha) {
            alert('As senhas não coincidem. Por favor, verifique.');
            event.preventDefault();
        }
    });

    document.getElementById('deleteAccount').addEventListener('click', function() {
        const confirmDelete = confirm('Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.');
        if (confirmDelete) {
            // Aqui você pode adicionar a lógica para excluir a conta, como uma chamada AJAX ao servidor.
            alert('Conta excluída com sucesso.');
        }
    });
});