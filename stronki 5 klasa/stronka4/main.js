function funkcja() {
	let piling = document.getElementById("piling").checked;
	let maska = document.getElementById("maska").checked;
	let masaz = document.getElementById("masaz").checked;
	let regul = document.getElementById("regul").checked;
	let wynik = document.getElementById("wynik");
	let cena = 0;
	if(piling) cena += 45;
	if(maska) cena += 30;
	if(masaz) cena += 20;
	if(regul) cena += 5;
	wynik.innerHTML = "Cena zabiegów: " + cena;
}