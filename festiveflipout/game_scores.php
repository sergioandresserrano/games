<?php

    header("Access-Control-Allow-Origin: *");
    require_once(realpath('../connection_flipout.php'));

    $myquery1 = "SELECT name,score FROM scores";
    $consult1 = mysqli_query($connection,$myquery1) or die( mysqli_error($connection));

    $i = 0;

    while($row1 = mysqli_fetch_array($consult1)) {
        $names[$i] = $row1[0];
        $scores[$i] = decrypt($row1[1]);
        $i++;
    }

    arsort($scores);

    foreach ($scores as $key=>$value) {
        $result[] = $value.'::'.$names[$key].'::';
    }

    $clength = count($result);
    for($x = 0; $x < $clength; $x++) {
        echo $result[$x];
    }

    
    mysqli_close($connection);
?>
