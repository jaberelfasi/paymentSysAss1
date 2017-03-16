<?php
require __Dir__ . '/Dao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">



<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'PaymentLinks')" id="defaultOpen">Payment Links</button>
    <button class="tablinks" onclick="openTab(event, 'TakePayment')">Take Payment</button>
    <button class="tablinks" onclick="openTab(event, 'OutstandingRev')">Outstanding Revenue</button>
    <button class="tablinks" onclick="openTab(event, 'Contract')">Contract</button>
</div>

<div id="PaymentLinks" class="tabcontent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <select multiple id="select">
                    <option selected disabled>Link</option>
                    <option id="payment">Payment</option>
                    <option id="recur">Recurring Payment</option>
                    <option id="nopayment">No Payment</option>
                </select>
                <br><br><br><br><br><br>
                <button onclick="clickButton()">Send Page to Customer</button>
                <br><p id="picoutput"></p>
            </div>
            <div class="col-md-4">
                <input type="checkbox" id="contract">Contract<br>
                <input type="checkbox" id="ddm">Direct Debit<br>
                <input type="checkbox" id="oneoff">One Off
            </div>
            <div class="col-md-4">
                <h3>Order Details</h3>
                <table style="width:100%">
                    <?php
                    $labelArray = array('Company Name: ', 'Contractor Name: ', 'Contract Start: ',
                        'Contract Length: ', 'Website URL: ', 'Telephone: ', 'Order Number: ',
                        'Product: ', 'Payment Amount(£): ');
                    $valueArray = $db->getOrderDetails();
                    $y=1;
                    for ($i = 0; $i < 9; $i++) {
                        echo "<tr><td>" . $labelArray[$i] . "</td><td>" . $valueArray[0][$y] . "</td></tr>";
                        $y++;
                    }
                    ?>

                </table>
            </div>
        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://sandbox.dev:8080/paymentSys/myscripts.js"></script>
<script>
document.getElementById("defaultOpen").click();
</script>
