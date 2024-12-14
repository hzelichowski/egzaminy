function kolor1(klik) {
	let prawy = document.getElementById("prawy");
	prawy.style.background = klik;
}
function kolor2() {
	let prawy = document.getElementById("prawy");
	let kolor = document.getElementById("kolor");
	prawy.style.color = kolor.value;
}
function kolor3() {
	let prawy = document.getElementById("prawy");
	let size = document.getElementById("size").value;
	prawy.style = "font-size: " + size + "%";
}
function kolor4() {
	let foto = document.getElementById("foto");
	let ramka = document.getElementById("ramka").checked;
	if(ramka) {
		foto.style.border = "1px solid white";
	} else foto.style.border = "none";
}
function kolor5(test) {
	let lista = document.getElementById("lista");
	lista.style.listStyleType = test;
}