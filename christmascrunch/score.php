<?php 

	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$score = $_POST['score'];

	$xml = new DomDocument('1.0','UTF-8');
	$xml->load('reg.xml');
	
	$rootTag = $xml->getElementsByTagName('root')->item(0);
	
	$regTag = $xml->createElement('reg');
	
	$nameTag = $xml->createElement('name',$name);
	$companyTag = $xml->createElement('company',$company);
	$emailTag = $xml->createElement('email',$email);
	$scoreTag = $xml->createElement('score',$score);
	
	$regTag->appendChild($nameTag);
	$regTag->appendChild($companyTag);
	$regTag->appendChild($emailTag);
	$regTag->appendChild($scoreTag);
	
	$rootTag->appendChild($regTag);
	
	$xml->save('reg.xml');

?>
