/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


var payment = 0;
var recur = 0;
var oneOff = 0;
var contract = 0;
var ddm = 0;
$(document).ready(function () {
    $("button").click(function () {
        var select = document.getElementById("select");
        var check1 = document.getElementById("contract");
        var check2 = document.getElementById("ddm");
        var check3 = document.getElementById("oneoff");
        if (select.options[1].selected === true)
            payment = 1;
        if (select.options[2].selected === true)
            recur = 1;
        if (check1.checked === true)
            contract = 1;
        if (check2.checked === true)
            ddm = 1;
        if (check3.checked === true)
            oneoff = 1;



        $.post("test.php", {payment: payment, recur: recur,
            oneOff: oneOff, contract: contract, ddm: ddm},
                function (data, status) {
                    //alert("Data: " + data + "\nStatus: " + status);
                    $('#picoutput').html(data);
                    //document.getElementById("demo").innerHTML = + data;
                });
    });
});



