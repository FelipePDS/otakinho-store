//PASSWORD
const iconViewPassword = document.querySelector('.view-password');
const password = document.querySelector(".password");

iconViewPassword.addEventListener('click', () => {
    if (password.type === "password") {
        password.setAttribute("type", "text");
        iconViewPassword.setAttribute("title", "Ocultar senha");
    } else if (password.type === "text") {
        password.setAttribute("type", "password");
        iconViewPassword.setAttribute("title", "Visualizar senha");
    }
    password.focus();
});


//INPUTS
const inputsContainer = document.querySelectorAll('.clearfix p');

inputsContainer.forEach(inputContainer => {
    const input = inputContainer.querySelector('input');
    const span = inputContainer.querySelector('span');

    input.addEventListener('focus', () => {
        span.style.color = "#1acc8d";
    });

    input.addEventListener('blur', () => {
        span.style.removeProperty('color');
    });
});
