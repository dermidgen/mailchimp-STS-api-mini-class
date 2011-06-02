<?php
/**
This Example shows how to create a basic campaign via the MCAPI class.
**/
require_once 'inc/MCSTSAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

$api = new MCAPI($apikey);

$retval = $api->listVerifiedEmailAddresses();

if ($api->errorCode){
	echo "Unable to List Verified Email Addresses!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} else {
	echo "Verfied Email Addresses:". var_export($retval, true) ."\n";
}

?>
