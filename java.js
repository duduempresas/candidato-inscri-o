document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio do formulário

        // Validar formulário aqui
        // Você pode usar bibliotecas como Validator.js ou fazer validações personalizadas

        // Exemplo de validação simples
        var nome = document.getElementById('nome').value;
        var sobrenome = document.getElementById('sobrenome').value;
        var telefone = document.getElementById('telefone').value;
        var endereco = document.getElementById('endereco').value;
        var bairro = document.getElementById('bairro').value;
        var cep = document.getElementById('cep').value;
        var numero_residencia = document.getElementById('numero_residencia').value;

        if (nome === '' || sobrenome === '' || telefone === '' || endereco === '' || bairro === '' || cep === '' || numero_residencia === '') {
            alert('Por favor, preencha todos os campos.');
        } else {
            // Se o formulário estiver válido, você pode enviar os dados para o servidor
            event.target.submit();
        }
    });
});
