<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--IMPORTANTE-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--SEO META TAG-->
<title>Score Table</title>


<!--<-?php
	$xml = simplexml_load_file('../reg.xml');
	foreach ($xml->score as $score){
		echo $score->name.'</br></br>';
	};
?> -->





<!--LINK HREF-->
<link href="js/owl/owl.carousel.css" rel="stylesheet">
<link href="js/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="animate.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>

</head>
<body>

<?php
$allscores = array();

$xml = simplexml_load_file('../reg.xml'); 

foreach ($xml->score as $item) {
    $allscores[] = array(
                     'name'             => (string)$item->name,
					 'timep'          => (string)$item->timep,
                    );
}

$sort = array();

foreach($allscores as $k=>$v) {
$sort['timep'][$k] = $v['timep'];
}
array_multisort($sort['timep'], SORT_DESC,$allscores);




$newArray = array(); 
$usedFruits = array(); 
foreach ( $allscores AS $line ) { 
    if ( !in_array($line['name'], $usedFruits) ) { 
        $usedFruits[] = $line['name']; 
        $newArray[] = $line; 
    } 
} 
$allscores = $newArray; 
unset($newArray,$usedFruits); 





?>

<div class="banner">
    <img src="img/banner.png"/>
</div>


<div class="container_title">
	<div class="title">Name</div>
    <div class="title">Score</div>
</div>
 

<div class="container">
    	
        <div class="column">
        	            
            <div class="content">
            	<?php
				echo $allscores[0]['name'].'</br></br>';
				echo $allscores[1]['name'].'</br></br>';
				echo $allscores[2]['name'].'</br></br>';
				echo $allscores[3]['name'].'</br></br>';
				echo $allscores[4]['name'].'</br></br>';
				echo $allscores[5]['name'].'</br></br>';
				echo $allscores[6]['name'].'</br></br>';
				echo $allscores[7]['name'].'</br></br>';
				echo $allscores[8]['name'].'</br></br>';
				echo $allscores[9]['name'].'</br></br>';
				?>
            </div>
        
        </div>
        
        <div class="column">
        	            
            <div class="content">
            	<?php
				echo $allscores[0]['timep'].'</br></br>';
				echo $allscores[1]['timep'].'</br></br>';
				echo $allscores[2]['timep'].'</br></br>';
				echo $allscores[3]['timep'].'</br></br>';
				echo $allscores[4]['timep'].'</br></br>';
				echo $allscores[5]['timep'].'</br></br>';
				echo $allscores[6]['timep'].'</br></br>';
				echo $allscores[7]['timep'].'</br></br>';
				echo $allscores[8]['timep'].'</br></br>';
				echo $allscores[9]['timep'].'</br></br>';
				?>
            </div>
        
        </div>




       
</div>





<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="actions.js" type="text/javascript" charset="utf-8"></script>
<script src="js/scrollto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/easing.js" type="text/javascript" charset="utf-8"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script>wow = new WOW({animateClass: 'animated',offset:0});wow.init();</script>
</body>
</html>