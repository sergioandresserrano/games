<?php 

	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$timep = $_POST['score'];

	$xml = new DomDocument('1.0','UTF-8');
	$xml->load('reg.xml');
	
	$rootTag = $xml->getElementsByTagName('root')->item(0);
	
	$scoreTag = $xml->createElement('score');
	
	$nameTag = $xml->createElement('name',$name);
	$companyTag = $xml->createElement('company',$company);
	$emailTag = $xml->createElement('email',$email);
	$timeTag = $xml->createElement('timep',$timep);
	
	$scoreTag->appendChild($nameTag);
	$scoreTag->appendChild($companyTag);
	$scoreTag->appendChild($emailTag);
	$scoreTag->appendChild($timeTag);
	
	$rootTag->appendChild($scoreTag);
	
	$xml->save('reg.xml');

?>
