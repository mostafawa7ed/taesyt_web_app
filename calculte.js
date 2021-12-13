//var real_price = document.getElementById("real_price").value;
//var nspa = document.getElementById("nspa").value;
//var months = document.getElementById("months").value;
//var price_month = document.getElementById("price_month").value;
//var price_after = document.getElementById("price_after").value;

function calculte_fun() {

    // alert("Hello! I am an alert box!!");
    var real_price = document.getElementById("real_price").value;
    var nspa = document.getElementById("nspa").value;
    var months = document.getElementById("months").value;
    var p_f = (Number(real_price) + (Number(nspa) * Number(real_price)) / 100);
    var p_m = ((Number(real_price) + (Number(nspa) * Number(real_price)) / 100) / Number(months));
    document.getElementById("price_after").value = p_f;
    document.getElementById("price_month").value = p_m;
}

function add_fun(num1, num2) {
    document.getElementById("num").value = num1 + num2;
    //alert(num1 + num2);
}