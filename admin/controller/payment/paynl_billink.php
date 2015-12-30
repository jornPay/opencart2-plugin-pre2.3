<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlBillink extends Pay_Controller_Admin {
    protected $_paymentOptionId = 1672;
    protected $_paymentMethodName = 'paynl_billink';
    
    protected $_defaultLabel = 'Billink';
    
    
}