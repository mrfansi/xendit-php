<?php
	require('config/xendit_v2_client_config.php');
	require('index.php');

	$options['secret_api_key'] = constant('SECRET_API_KEY');

	$xenditV2InvoiceClient = new XenditV2InvoiceClient($options);

	$external_id = $argv[1];
	$bank_code = $argv[2];
	$name = $argv[3];

	$xenditV2InvoiceClient->createCallbackVirtualAccount($external_id, $bank_code, $name);
?>