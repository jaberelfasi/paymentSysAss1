<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" href="style.css">



<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'PaymentLinks')" id="defaultOpen">Payment Links</button>
    <button class="tablinks" onclick="openTab(event, 'TakePayment')">Take Payment</button>
    <button class="tablinks" onclick="openTab(event, 'OutstandingRev')">Outstanding Revenue</button>
    <button class="tablinks" onclick="openTab(event, 'Contract')">Contract</button>
</div>

<div id="PaymentLinks" class="tabcontent">
    <form>
        <label class="radio-inline">
            <input type="radio" name="optradio" id="option1">Option 1
        </label>
        <label class="radio-inline">
            <input type="radio" name="optradio" id="option2">Option 2
        </label>
    </form>
    <div class="radioContent">hi3</div>
    <div class="orderDetails">
        
    </div>
</div>

<div id="TakePayment" class="tabcontent">

    <p>html content goes here</p> 
</div>

<div id="OutstandingRev" class="tabcontent">

    <p>html content goes here</p>
</div>

<div id="Contract" class="tabcontent">

    <p>html content goes here</p>
</div>



<script src="javascript.js"></script>
<script>
// Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
</script>
<script>
        //var x=document.getElementByClassName("radioContent");
        //x.style.display = 'none';
    function chooseRadio() {
    var option1 = document.getElementById("option1");
    var option2 = document.getElementById("option2");
    if (option1.checked==true){
        //display here will be back
    }
}
</script>
