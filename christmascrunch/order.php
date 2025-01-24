<?php

	$allscores = array();
	$xml = simplexml_load_file('reg.xml'); 
	foreach ($xml->reg as $item) {
	    $allscores[] = array(
	                     'name'             => (string)$item->name,
						 'score'          => (string)$item->score,
	                    );
	}
	$sort = array();
	foreach($allscores as $k=>$v) {
	$sort['score'][$k] = $v['score'];
	}
	array_multisort($sort['score'], SORT_DESC,$allscores);


	$newArray = array(); 
	$tempArray = array(); 
	foreach ( $allscores AS $line ) { 
	    if ( !in_array($line['name'], $tempArray) ) { 
	        $tempArray[] = $line['name']; 
	        $newArray[] = $line;
	    } 
	} 
	$allscores = $newArray; 
	unset($newArray,$tempArray);

?>



<?php

	$file = 'order.xml';
	$xml = simplexml_load_file($file);
	unset($xml->reg);
	$success = $xml->asXML($file);


	$xml = new DomDocument('1.0','UTF-8');
	$xml->load('order.xml');

	$rootTag = $xml->getElementsByTagName('root')->item(0);


	for ($i = 0; $i <= 9; $i++) {
    	
    	$regTag = $xml->createElement('reg');
	
		$nameTag = $xml->createElement('name',$allscores[$i]['name']);
		$scoreTag = $xml->createElement('score',$allscores[$i]['score']);
		
		$regTag->appendChild($nameTag);
		$regTag->appendChild($scoreTag);
		
		$rootTag->appendChild($regTag);
		
		$xml->save('order.xml');
	}



?>
