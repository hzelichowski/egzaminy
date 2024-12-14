

var lA = document.getElementById("liczA")
var lB = document.getElementById("liczB")
var wynik;
var polewynik = document.getElementById("wynik")

var p1 = document.getElementById("dodaj")
p1.onclick = function(){
    wynik = parseInt(lA.value) + parseInt(lB.value);
    polewynik.innerHTML = "wynik: " + wynik;
}

var p2 = document.getElementById("odejmij")
p2.onclick = function(){
    wynik = parseInt(lA.value) - parseInt(lB.value);
    polewynik.innerHTML = "wynik: " + wynik;
}

var p3 = document.getElementById("mnoz")
p3.onclick = function(){
    wynik = parseInt(lA.value) * parseInt(lB.value);
    polewynik.innerHTML = "wynik: " + wynik;
}

var p4 = document.getElementById("dziel")
p4.onclick = function(){
    wynik = parseInt(lA.value) / parseInt(lB.value);
    polewynik.innerHTML = "wynik: " + wynik;
}

var p5 = document.getElementById("potega")
p5.onclick = function(){
    wynik = parseInt(lA.value) ** parseInt(lB.value);
    polewynik.innerHTML = "wynik: " + wynik;
}