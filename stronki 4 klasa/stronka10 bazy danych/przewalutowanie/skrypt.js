function kalkulator() {
    var a1;
    var b1;
        var pln = 1.00;
        var eur = 4.32;
        var usd = 3.98;
        
        switch (przelicznik.co.value)
        {
            case "PLN":
                a1 = przelicznik.ile.value*pln;
                break;
            case "EUR":
                a1 = przelicznik.ile.value*eur;
                break;
            case "USD":
                a1 = przelicznik.ile.value*usd;
                break;
            default:
                a1 = "nie udało się:(";
        }
        
        switch (przelicznik.naCo.value)
        {
            case "PLN":
                b1 = a1/pln;
                break;
            case "EUR":
                b1 = a1/eur;
                break;
            case "USD":
                b1 = a1/usd;
                break;
            default:
                b1 = "nie udało się:(";
        }
        
    przelicznik.wynik.value = b1;
}