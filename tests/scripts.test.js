import { initDarkModeToggle } from '../formulario/js/scripts.js';

document.body.innerHTML = `
    <div class="modo-escuro">
        <input type="checkbox" />
    </div>
    <input id="cpf" />
    <input id="telefone" />
    <input id="senha" type="password" />
    <input id="confirm-senha" type="password" />
    <button id="btn-senha"></button>
    <button id="btn-confirmar"></button>
`;

describe('Testando as funções do arquivo', () => {


    test('Testando mascara de CPF', () => {
        const cpfInput = document.getElementById('cpf');
        cpfInput.value = '12345678900';
        mascara(cpfInput);
        expect(cpfInput.value).toBe('123.456.789-00');
    });

    test('Testando máscara de telefone', () => {
        const telefoneInput = document.getElementById('telefone');
        telefoneInput.value = '1234567890';
        handlePhone({ target: telefoneInput });
        expect(telefoneInput.value).toBe('(12) 3456-7890');
    });

    test('Testando mostrarSenha', () => {
        const senhaInput = document.getElementById('senha');
        const btnShowPass = document.getElementById('btn-senha');
        senhaInput.setAttribute('type', 'password');
        mostrarSenha();
        expect(senhaInput.getAttribute('type')).toBe('text');
        expect(btnShowPass.classList.contains('bi-eye-slash-fill')).toBe(true);
    });

    test('Testando confirmarSenha', () => {
        const confirmSenhaInput = document.getElementById('confirm-senha');
        const btnShowPass = document.getElementById('btn-confirmar');
        confirmSenhaInput.setAttribute('type', 'password');
        confirmarsenha();
        expect(confirmSenhaInput.getAttribute('type')).toBe('text');
        expect(btnShowPass.classList.contains('bi-eye-slash-fill')).toBe(true);
    });

    test('Testando validatePassword', () => {
        const senhaInput = document.getElementById('senha');
        const confirmSenhaInput = document.getElementById('confirm-senha');
        senhaInput.value = 'senha123';
        confirmSenhaInput.value = 'senha123';
        validatePassword();
        expect(confirmSenhaInput.validationMessage).toBe('');
    });
});