<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
 echo $_SESSION['link'];
 echo "<br>";
 if($_SESSION['contract']==1&&$_SESSION['ddm']==1&&$_SESSION['payment']==1
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==0)
 {
     echo "do the following to the customer:"
     . "<br>-Show contract"
     . "<br>-Show Direct Debit"
     . "<br>-Show Payment";
 }elseif($_SESSION['contract']==1&&$_SESSION['ddm']==1&&$_SESSION['payment']==1
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==1){
     echo "do the following to the customer:"
     . "<br>-Show contract"
     . "<br>-Show Direct Debit"
     . "<br>-Show Payment"
     . "<br>-Show One-Off Payment";
    }elseif ($_SESSION['contract']==1&&$_SESSION['ddm']==1&&$_SESSION['nopayment']==1
         &&$_SESSION['payment']==0&&$_SESSION['recur']==0&&$_SESSION['oneoff']==0) {
    echo "do the following to the customer:"
     . "<br>-Show contract"
     . "<br>-Show Direct Debit";
}elseif ($_SESSION['contract']==1&&$_SESSION['ddm']==0&&$_SESSION['payment']==0
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==1&&$_SESSION['oneoff']==0) {
    echo "do the following to the customer:"
     . "<br>-Show contract";
}elseif ($_SESSION['contract']==1&&$_SESSION['ddm']==0&&$_SESSION['payment']==1
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==0) {
    echo "do the following to the customer:"
     . "<br>-Show contract"
     . "<br>-Show Payment";
}elseif($_SESSION['contract']==0&&$_SESSION['ddm']==0&&$_SESSION['payment']==0
    &&$_SESSION['recur']==1&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==0){
    echo "do the following to the customer:"
     . "<br>-Show Recurring Payment";
    }elseif($_SESSION['contract']==0&&$_SESSION['ddm']==0&&$_SESSION['payment']==1
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==1){
    echo "do the following to the customer:"
     . "<br>-Show One-Off Payment";
    }elseif($_SESSION['contract']==0&&$_SESSION['ddm']==1&&$_SESSION['payment']==1
    &&$_SESSION['recur']==0&&$_SESSION['nopayment']==0&&$_SESSION['oneoff']==0){
    echo "do the following to the customer:"
     . "<br>-Show Direct Debit";
    }else{
    echo "<br>please review your entry:";
    }
    
?>
<br><p id="picoutput"></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://sandbox.dev:8080/paymentSys/myscripts.js"></script>
