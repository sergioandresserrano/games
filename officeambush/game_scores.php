<?php

    header("Access-Control-Allow-Origin: *");
    require_once(realpath('../connection_ambush.php'));

    $myquery1 = "SELECT name,score FROM scores ORDER BY score ASC";
    $consult1 = mysqli_query($connection,$myquery1) or die( mysqli_error($connection));

    while($row1 = mysqli_fetch_array($consult1)) {
        echo $row1[0]."::".decrypt($row1[1])."::";
    }

    
    mysqli_close($connection);
?>
