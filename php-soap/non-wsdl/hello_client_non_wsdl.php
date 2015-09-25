<?php
try {
	$client = new SoapClient(null, [
		'location' => 'http://localhost/php-soap/non-wsdl/hello_service_non_wsdl.php',
		'uri' => 'http://localhost/php-soap/non-wsdl/helloService'
	]);
	
	$result =  $client->__soapCall('greet', [
		new SoapParam('Suhua', 'name')
	]);
	    
	printf("Result = %s", $result);
} catch (Exception $e) {
	printf("Message = %s",$e->__toString());
}