function kolorTla(kolor){
    const prawy = document.getElementById("prawy");
    prawy.style.background = kolor

}

function kolorCzcionki(kolorc){
    const prawy = document.getElementById("prawy");
    prawy.style.color = kolorc;
}


function rozmiarCzcionki(rozmiar){
    const prawy = document.getElementById("prawy");
    prawy.style.fontSize = rozmiar + "%";
}


function ramka(){
    const zaznaczenie = document.getElementById("ramka").checked;
    const obraz = document.getElementById("obraz")
    if (zaznaczenie){
        obraz.style.border = "1px solid white"
    }
    else{
        obraz.style.border = "none"
    }
}


function znaczek(znak){
    const lista = document.getElementById("lista");
    lista.style.listStyleType = znak

}