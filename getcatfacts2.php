
<?php
/*https://stackoverflow.com/questions/15617512/get-json-object-from-url */
    $amount = $_GET['amount'];
    $url = "https://catfact.ninja/facts?limit=" . $amount;
    $json = file_get_contents($url);
    $json_stuff = json_decode($json, true);
    
    /*was getting an odd error where it could not get over 300 requests, 
    so Im going to try to refresh from url and reset count*/
    $reset = 0;
    while($x<$amount){
        if($json_stuff["data"][$reset]["fact"] == ""){
            $reset = 0;
            $url = "https://catfact.ninja/facts?limit=" . $amount;
            $json = file_get_contents($url);
            $json_stuff = json_decode($json, true);
        }
        echo $x+1 ." " . $json_stuff["data"][$reset]["fact"] . "<br><br>";
        $x= $x+1;
        $reset=$reset+1;
    }
?>