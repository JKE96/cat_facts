
<?php
/*https://stackoverflow.com/questions/15617512/get-json-object-from-url */
    $json = file_get_contents("https://catfact.ninja/fact");
    $json_stuff = json_decode($json, true);
    echo $json_stuff["fact"] . "<br><br>";
?>