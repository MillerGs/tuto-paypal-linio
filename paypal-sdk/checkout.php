<?php  
require_once 'app/start.php';

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

$payer = new Payer();
$payer->setPaymentMethod("paypal");

$item = new Item();
$item->setName('Product Name')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setSku("sku")
    ->setPrice(20);
	

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setShipping(0)
    ->setTax(0)
    ->setSubtotal(20);
	
$amount = new Amount();
$amount->setCurrency('USD')
    ->setTotal(20)
    ->setDetails($details);
	
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription('desc...')
    ->setInvoiceNumber(uniqid());
	
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL."/success.php?success=true")
    ->setCancelUrl(SITE_URL."/success.php?success=false");
	
$payment = new Payment();
$payment->setIntent("sale")
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));
	
	
//$request = clone $payment;

$start = new start();
$apiContext = $start->apiContext();

try {
    $payment->create($apiContext);
}catch (Exception $ex) {
    die($ex);
}

$approvalUrl = $payment->getApprovalLink();
header("location:".$approvalUrl);

