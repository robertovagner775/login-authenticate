const form = document.getElementById('form')
const pass = document.getElementById('password')
const email = document.getElementById('email')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    verifyInputs()
})

function verifyInputs(){
    const emailValue = email.value.trim()
    const passValue = pass.value.trim()
    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    const emailTest = emailRegex.test(emailValue);
    var correct = 0

    if(!emailTest){
        errorValidation(email, "email incorreto")
    }else {
        successValidation(email)
        correct+=1
    }

    if(passValue === ''){
        errorValidation(pass, "Prencha esse campo")
    } else {
        successValidation(pass)
        correct+=1
    }
    if(correct>=2){
        form.submit()
    }



}

function errorValidation(input, message){
    const box = input.parentElement
    const span = box.querySelector('span');
    span.innerText = message
    box.className = 'box error'
}
function successValidation(input){
    const box = input.parentElement
    box.className = 'box success'
}
