const form = document.getElementById("form")
const username = document.getElementById("username")
const email = document.getElementById("email")
const pass = document.getElementById("pass")
const passConfirm = document.getElementById("passConfirm")

form.addEventListener("submit", (e) => {

    e.preventDefault()
    verifyInputs()

});

function verifyInputs(){
    const userValue = username.value.trim()
    const emailValue = email.value.trim()
    const passValue = pass.value.trim()
    const passConfirmValue = passConfirm.value.trim()
    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    const emailTest = emailRegex.test(emailValue)
    if(userValue.length >= 3 && userValue != ""){
        setSuccess(username);
    } else {
        setError(username, "Nome de usuario deve ser maior que 3 digitos");
    }

    if(!emailTest){
        setError(email, "Preencha corretamente seu email")
    } else {
        setSuccess(email)
    }

    if(passValue >= 6 || passValue != ""){
        setSuccess(pass)

    } else {
        setError(pass, "senha deve possuir 6 digitos no minimo")
    }
    if (passValue == passConfirmValue) {
        setSuccess(passConfirm)

    } else {
        setError(passConfirm ,"as senhas são diferentes")
    }
    
}

function setError(input, message){
    const box = input.parentElement
    const span = box.querySelector('span');
    span.innerText = message
    box.className = 'box error'
}
function setSuccess(input){
    const box = input.parentElement
    box.className = 'box success'
}