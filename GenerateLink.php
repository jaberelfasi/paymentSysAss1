<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GenerateLink {

    public $paymentParam;
    public $recurringParam;
    public $oneOffPaymentParam;
    public $contractParam;
    public $ddmParam;

    function __construct($payment, $recur, $oneOff, $contract, $ddm) {
        $this->paymentParam=$payment;
        $this->recurringParam=$recur;
        $this->oneOffPaymentParam=$oneOff;
        $this->contractParam=$contract;
        $this->ddmParam=$ddm;
    }
    
    function generateLink(){
        return "http://sandbox.dev:8080/paymentSys/CustomerManager.php?payment=".$this->paymentParam
                ."&recurring=".$this->recurringParam
                . "&oneOff=".$this->oneOffPaymentParam
                . "&contract=".$this->contractParam
                . "&ddm=".$this->ddmParam;
    }

}
