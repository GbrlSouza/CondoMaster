document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const userType = document.getElementById('userType').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (userType === 'sindico') {
        alert(`Bem-vindo, síndico ${username}!`);
        window.location.href = 'sindico.html';
    } else if (userType === 'morador') {
        alert(`Bem-vindo, morador ${username}!`);
        window.location.href = 'morador.html';
    }
});