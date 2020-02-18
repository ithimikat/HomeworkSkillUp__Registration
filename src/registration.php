<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '/../vendor/autoload.php';
use App\ConnectDb;

if(isset($_POST['btnSubmit'])){
    $connect = new ConnectDb();
    $connect->openConnect();
    $connect->insertToDb($_POST);
}


