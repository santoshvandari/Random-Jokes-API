<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    header("Content-Type:Application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    $filename="jokes.txt";
    $fileContents = file_get_contents($filename);
    $jokes = explode("\n", $fileContents);
    $joke=array("joke"=>$jokes[array_rand($jokes)]);
    $response = json_encode($joke);
    echo $response;
}else{
    echo "Failed to Load Data";
}
?>
