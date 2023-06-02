<?php
include("JokesList.php");
// $rand=rand(1,count($jokes));
// $response = json_encode($jokes[$rand]);
// echo $rand;
// echo sizeof($jokes);
// echo $jokes[array_rand($jokes)];
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $response = json_encode($jokes[array_rand($jokes)]);
    echo $response;
}else{
    echo "Failed to Load Data";
}
?>