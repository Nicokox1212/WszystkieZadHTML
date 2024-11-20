const user = {
    login: "niko1212",
    password: "niko1212"
}

function login(){
    const emailInput = document.querySelector("input[type='email']").value
    const passwordInput = document.querySelector("input[type='password']").value

    if(emailInput != user.login){
        alert("taki uzytkownik nie istnieje")
        return
   
    }

    if(passwordInput != user.password){
        alert("takie haslo nie istnieje")
        return
   
    }

    alert("Zalogowano poprawnie")

    // emailInput.value="blablabla"
    // passwordInput.value="blablabla"

}


const button = document.querySelector("button")

button.addEventListener('click',login)