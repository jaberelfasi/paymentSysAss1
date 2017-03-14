

 
<?php
require __Dir__.'/Dao.php';
require __Dir__.'/GenerateLink.php';
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
$oneOff=$_POST["oneOff"];
$contract=$_POST["contract"];
$ddm=$_POST["ddm"];

$makelink = new GenerateLink($payment, $recur, $oneOff, $contract, $ddm);
echo $makelink->generateLink();
?>
