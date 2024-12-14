function zmien(img) {
    var obraz = document.getElementById('zmiana')
    obraz.src = img
}

var zdj = true;
var foto = document.getElementById('foto')
function zmienn(){
    

    if(zdj){
        foto.src = 'icon-on.png';
        zdj = false;
    }else {
        foto.src = 'icon-off.png';
        zdj = true;
    }
}












