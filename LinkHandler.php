

 
<?php
require __Dir__.'/Dao.php';
require __Dir__.'/GenerateLink.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//$db->openConnection();
//$db->closeConnection();
////$db->newRecord();
//$db->getOrderDetails();
$payment=$_POST["payment"];
$recur=$_POST["recur"];
$oneoff=$_POST["oneoff"];
$contract=$_POST["contract"];
$ddm=$_POST["ddm"];
$nopayment = $_POST["nopayment"];

$makelink = new GenerateLink($payment, $recur, $oneff, $contract, $ddm);
$_SESSION['link'] = $makelink->generateLink();
$_SESSION['payment'] = $payment;
$_SESSION['recur'] = $recur;
$_SESSION['oneoff'] = $oneoff;
$_SESSION['contract'] = $contract;
$_SESSION['ddm'] = $ddm;
$_SESSION['nopayment']= $nopayment;


?>
