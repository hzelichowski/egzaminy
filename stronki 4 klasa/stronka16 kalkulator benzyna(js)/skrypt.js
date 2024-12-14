function oblicz() {
    let typ = document.getElementById("typ").value;
    let ilosc = document.getElementById("ilosc").value;
    let wyn = document.getElementById("wyn");
    let cena = 0;

    if (typ === "benzyna") {
        cena = 2;
    }

    if (typ === "olej napedowy") {
        cena = 3;
    }
    
    if (ilosc <= 0) {
        wyn.innerHTML = "<h4>Wystąpił błąd krytyczny !!! Wybierz ilość !!!</h4>";
    }else{
    wyn.innerHTML = "Cena " + ilosc + " litrow " + typ + " to: " + eval(cena * ilosc) + " zł.";
    }
}