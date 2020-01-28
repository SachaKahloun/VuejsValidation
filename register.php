<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//http_response_code(400);
$response = new \stdClass();


if (empty($_POST['email'])){

    $response->email =  'Please enter an email address';
}
if (empty($_POST['password'])){
    $response->password =  'Please enter an password';

}

echo json_encode($response);
