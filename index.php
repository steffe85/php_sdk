<?
error_reporting(-1);
include_once 'mondido_sdk.php';

//get the transaction id from the POST
$transaction = mondido\mondido_sdk::getWebHook();
//get the id
$transaction_id = $transaction['id'];
//log to file
mondido\mondido_sdk::logToFile('log.txt',$transaction);