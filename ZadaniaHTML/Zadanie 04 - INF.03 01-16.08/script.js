function haslo(){
    var haslo = document.getElementById("haslo").value
    var akapit=document.getElementById("wynik");
    if (haslo.lenght < 1){
        akapit.style.color = "red";
        akapit.styule.fontWeight = "bold";
        akapit.innerHTML = "Wpisz haslo";
    }
}