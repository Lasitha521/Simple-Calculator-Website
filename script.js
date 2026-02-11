var display = document.querySelector("input");
var num1 = "";
var num2 = "";
var operator = ""; //(+,-,x,/,etc)


function cal(btn) {
    var value = btn.innerText.trim();

    if (!isNaN(value) || value === ".") {
        if (display.value.length < 12) {
            if (display.value === "0") {
                display.value = value;
            } else {
                display.value += value;

            }
            

        } else{
            console.log("Limit Reached");
        }


    } else if (value === "CE") {

        display.value = "0";
        num1 = "";
        num2 = "";
        operator = "";


    } else if (value === "←" || value === "DEL"){
        if (display.value.length > 1) {
            display.value = display.value.slice(0, -1);
            
        } else {
            display.value = "0";
            
        }

    }
    else if (value === "=") {
        num2 = display.value;
        solve();

    } else if (value === "√") {
        if (display.value !== "") {

            var num = parseFloat(display.value);
            display.value = Math.sqrt(num).toFixed(4);

        }

    }

    else {
        num1 = display.value;
        operator = value;
        display.value += ""+ value +"";
    }
}

function solve() {
    if (operator === "" || num1 === "") return;
    var parts = display.value.split(operator);
    num2 = parts[parts.length - 1].trim();
    var res = 0;
    var n1 = parseFloat(num1);
    var n2 = parseFloat(num2);

    if (isNaN(n2)) return;
    

    switch (operator) {
        case "+": res = n1 + n2; break;
        case "-": res = n1 - n2; break;
        case "×": res = n1 * n2; break;
        case "/":
            if (n2 === 0) {
                res = "Error";

            } else {
                res = n1 / n2;
            }
            break;

    }

    if (typeof res === 'number' && !Number.isInteger(res)) {
        res = parseFloat(res.toFixed(8));
        
    }

    display.value = res;
    num1 = res.toString();
    operator = "";
}