function subtotal_update() {
    var list = $("#mini-cart li");
    var total = 0;
    for(i = 0; i < list.length; i++) {
        var quant_price = list[i].children[2].children[1].innerHTML.split(' x £');
        total += quant_price[0] * quant_price[1];
    }
    $('#subtotal')[0].innerHTML= "£" + total.toFixed(2);
};

subtotal_update();
