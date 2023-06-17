const email = document.getElementById('email');
const password = document.getElementById('password');
const form = document.querySelector("form");
const errorMessage = document.getElementById('errorMessage');

form.addEventListener('submit', (e) => {
    errors = [];

    if(email.value.trim() === ""){
        errors.push("Where is your email?");
    }

    if(password.value.trim() === ""){
        errors.push("Where is your password?");
    }

    if(errors.length > 0){
        e.preventDefault();
        errorMessage.toggleAttribute('hidden');
        errorMessage.innerHTML = errors.join(', ');
    }
});


