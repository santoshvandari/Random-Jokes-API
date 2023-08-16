<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
    // include("JokesList.php");
    // $joke=array("joke"=>$jokes[array_rand($jokes)]);
    header("Content-Type:Application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");


    $filename="jokes.txt";
        // Read the file contents
        $fileContents = file_get_contents($filename);
        $jokes = explode('"', $fileContents);
        // Output the contents
        // echo $fileContents;
        // $jokes=array_filter(" ",$jokes);
        $joke=array("joke"=>$jokes[array_rand($jokes)]);
        
        print_r($joke);




    $response = json_encode($joke);
    // echo $response;
}else{
    echo "Failed to Load Data";
}










;








$filename = 'jokes.txt'; // Replace with your file's name

// Check if the file exists
if (file_exists($filename)) {
    // Read the file contents
    $fileContents = file_get_contents($filename);
    $dataArray = explode('"', $fileContents);
    // Output the contents
    // echo $fileContents;
    print_r($dataArray);
    echo $dataArray[3];
} else {
    echo "File not found.";
}
?>