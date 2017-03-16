/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();
var payment = 0;
var recur = 0;
var oneoff = 0;
var contract = 0;
var ddm = 0;
var nopayment=0;
function goToCustomerView() {
window.location.assign("http://sandbox.dev:8080/paymentSys/CustomerView.php");
}

function clickButton() {
    
    var check1 = document.getElementById("contract");
    var check2 = document.getElementById("ddm");
    var check3 = document.getElementById("oneoff");
    
    var select = document.getElementById("select");
    if (select.options[1].selected === true)
        payment = 1;
    if (select.options[2].selected === true)
        recur = 1;
    if (select.options[3].selected === true)
        nopayment = 1;
    if (check1.checked === true)
        contract = 1;
    if (check2.checked === true)
        ddm = 1;
    if (check3.checked === true)
        oneoff = 1;



    $.post("LinkHandler.php", {payment: payment, recur: recur,
        oneoff: oneoff, contract: contract, ddm: ddm, nopayment: nopayment},
            function (data, status) {
                //alert("Data: " + data + "\nStatus: " + status);
                //$('#picoutput').html(data);
                goToCustomerView();
                //document.getElementById("demo").innerHTML = + data;
            });
}




