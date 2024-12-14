function obliczanie() {
    var rodzaj = document.getElementById("rodzaj").value;
    var ilosc = document.getElementById("ilosc").value;
    var wynik = document.getElementById("wynik");
    var cena;
    if (rodzaj == 1){
        cena = 4;
    }
	else if (rodzaj == 2){
        cena = 3.5;
    }
	else{
        cena = 0;
    }
    wynik.innerHTML = "koszt paliwa: " + cena * ilosc + " zł";
}
