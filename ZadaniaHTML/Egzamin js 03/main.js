function nastepneZdjecie() {
    const img = document.getElementById("aktywne_zdjecie");
    img.src = `${(parseInt(img.src.match(/(\d+)\.jpg/)[1]) % 7) + 1}.jpg`;
}

function poprzednieZdjecie() {
    const img = document.getElementById("aktywne_zdjecie");
    img.src = `${(parseInt(img.src.match(/(\d+)\.jpg/)[1]) - 1) || 7}.jpg`;
}


