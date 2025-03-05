function czarnoBialy(){
    const zdjecie = document.getElementById("pomarancza")
    zdjecie.style.filter = "grayscale(100%)"

}

function kolor(){
        const zdjecie = document.getElementById("pomarancza")
    zdjecie.style.filter = "none"
}


function zastosujPrzezroczystosc(){
    const zdjecie = document.getElementById("owoce")
    const wartosc = document.getElementById("przezroczystosc").value 
    zdjecie.style.filter = "opacity(" +wartosc+ "%)"
}


function zastosujJasnosc(){
    const zdjecie = document.getElementById("zolw")
    const wartosc = document.getElementById("jasnosc").value 
    zdjecie.style.filter = "brightness(" +wartosc+ "%)"
}

function zastosujEfekt(){
    const zdjecie = document.getElementById("pszczola")
    const efekt = document.getElementsByName("efekt")
    for (var i = 0; i<efekt.length;i++){
        if (efekt[i].checked){
            zdjecie.style.filter = efekt[i].value
        }
    }

}