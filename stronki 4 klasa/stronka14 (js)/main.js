function zmien(img) {
    const obraz = document.getElementById('zmiana')
    obraz.src = img
}


var img1 = ['icon-off.png','icon-on.png'];
		
var img2 = true;
function zmienn(){
	if (img2){
		document.getElementById('foto').src = img1[1];
		img2 = false;
	}
	
	else {
		document.getElementById('foto').src = img1[0];
		img2 = true;
	}
}