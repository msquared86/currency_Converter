<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Micheal
 * Date: 7/24/13
 * Time: 1:06 AM
 * To change this template use File | Settings | File Templates.
 */

require_once 'exchanges.php';

$calc = new rateConversion();
$ex= new getExchange();

$ex->getCurrencies();
$ex->getExchangeRates();

$amount = $calc->calcRates($_POST['amount'], $_POST['to'], $_POST['from']);

echo $amount;

?>