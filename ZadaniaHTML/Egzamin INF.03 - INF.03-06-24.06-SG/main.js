function nastepnaKarta1(){
    const blok1 = document.getElementById("blok1");
    const blok2 = document.getElementById("blok2");
    blok1.style.visibility = "hidden";
    blok2.style.visibility = "visible";
}

function nastepnaKarta2(){
    const blok2 = document.getElementById("blok2");
    const blok3 = document.getElementById("blok3");
    blok2.style.visibility = "hidden";
    blok3.style.visibility = "visible";
}

function zatwierdz(){
    const haslo1 = document.getElementById("haslo1").value
    const haslo2 = document.getElementById("haslo2").value
    if (haslo1 != haslo2){
        alert("Podane hasla roznia sie");
    }
    else{
        const imie = document.getElementById("imie").value
        const nazwisko = document.getElementById("nazwisko").value
        console.log(`Witaj ${imie} ${nazwisko}`);
    }
    
}
