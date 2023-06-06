<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include("JokesList.php");
    $joke=array("joke"=>$jokes[array_rand($jokes)]);
    header("Content-Type:Application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    $response = json_encode($joke);
    echo $response;
}else{
    echo "Failed to Load Data";
}
?>