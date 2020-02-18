<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '/../vendor/autoload.php';
use App\ConnectDb;

//валидация пришедших данных из массива $_POST
function formDataValidation(array $data) : array{
    foreach ($data as $key => $value){
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        $data[$key] = str_replace(" ", "", $value);
    }
    return $data;
}

if(isset($_POST['btnSubmit'])){
    $data = formDataValidation($_POST);

    $connect = new ConnectDb();
    $connect->openConnect();
    $connect->insertToDb($data);
}


