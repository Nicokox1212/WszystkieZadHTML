
function obliczPuszki() {
    let powierzchnia = parseFloat(document.getElementById('powierzchnia').value);
    let wydajnoscPuszki = 3.5; // m² na jedną puszkę
    let liczbaPuszek = Math.ceil(powierzchnia / wydajnoscPuszki);
    document.getElementById('wynik').textContent = "Liczba potrzebnych puszek: " + liczbaPuszek;
}
