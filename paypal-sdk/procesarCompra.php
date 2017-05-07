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

class procesarCompra {

    function index($apiContext) {
        $items = $_POST['items'];
        (float) $precioDeEnvio = 0;
        (float) $subTotal = 0;
        (float) $total = $subTotal + $precioDeEnvio;
        $currency = $items[0]['currency'];

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");


        $arrayItem = [];
        $itemList = new ItemList();

        for ($i = 0; $i < count($items); $i++) {

            $subTotal = $subTotal + ((float) $items[$i]['price'] * (integer) $items[$i]['quantity']);

            $item = new Item();
            $item->setName($items[$i]['product'])
                    ->setCurrency($currency)
                    ->setQuantity((integer) $items[$i]['quantity'])
                    ->setSku($items[$i]['sku'])
                    ->setPrice((float) $items[$i]['price']);

            array_push($arrayItem, $item);
        }
        $itemList->setItems($arrayItem);


        $details = new Details();
        $details->setShipping((float) $precioDeEnvio)
                ->setTax(0)
                ->setSubtotal((float) $subTotal);

        $amount = new Amount();
        $amount->setCurrency($currency)
                ->setTotal((float) $total + $subTotal)
                ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription('Compra en línea')
                ->setInvoiceNumber(uniqid());

        $baseUrl = SITE_URL;
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/success.php?success=true")
                ->setCancelUrl("$baseUrl/success.php?success=false");

        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            die($ex);
        }


        $approvalUrl = $payment->getApprovalLink();
        return $approvalUrl;
    }

}

$start = new start();
$apiContext = $start->apiContext();

$pC = new procesarCompra();
$url = $pC->index($apiContext);
echo $url;
