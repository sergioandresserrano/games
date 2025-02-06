<?php 
    require_once(realpath('../connection_ambush.php'));

    $name = $_POST["name"];
    $company = $_POST["company"];
	$email = $_POST["email"];
    $score = $_POST["score"];
    $agreed = $_POST["agreed"];
    $entrydate = date('l jS \of F Y h:i:s A');


    $myquery = "SELECT player,score FROM scores WHERE name='".$name."'";
    $consult = mysqli_query($connection,$myquery) or die( mysqli_error($connection));

    if($consult->num_rows == 0) {

        $add = "INSERT INTO scores (name, company, email, score, agreed, entrydate) VALUES ('".$name."','".$company."', '".encrypt($email)."', '".encrypt($score)."', '".$agreed."', '".$entrydate."')";
        if ($connection->query($add) === TRUE) {
            echo "Not found";
        }else {
            echo "Error 2";
        }

    } else {

        $row = mysqli_fetch_array($consult);

        if($score > decrypt($row[1])){
            $edit = "UPDATE scores SET score = '" . encrypt($score) . "' WHERE player=".$row[0]."";
            if ($connection->query($edit) === TRUE) {
                //FOUND
            }else {
                //ERROR
            }
        }
        
    }
        
    mysqli_close($connection);
?>
