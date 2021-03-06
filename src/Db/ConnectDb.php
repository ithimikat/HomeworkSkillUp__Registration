<?php

namespace App;

class ConnectDb
{
    private $connect = null;
    
    //соединение с базой
    public function openConnect() : void
    {
        $conf = require_once(__DIR__ . DIRECTORY_SEPARATOR . '../config/configDb.php');
        $this->connect = mysqli_connect($conf['host'], $conf['user'], $conf['pass'], $conf['dbname']);
    }

    //вставка данных в таблицу
    public function insertToDb(array $data) : void
    {
        if($this->connect){
            $data = $this->validateData($data);

            $firstName = $lastName = $age = $email = $password = null;
            extract($data);
            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO `users` VALUES('null', '$firstName', '$lastName', 
                                             '$age', '$email', '$password')";

            $res = mysqli_query($this->connect, $query);
            $this->showMessage($res);
        }else{
            $this->showMessage(false);
        }
    }

    //валидация данных пришедших из формы
    private function validateData(array $data) : array
    {
        foreach ($data as $key => $value){
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
            $value = str_replace(" ", "", $value);
            $data[$key] = mysqli_real_escape_string($this->connect, $value);
        }
        return $data;
    }

    //вывод сообщения об успешной регистрации или ошибке
    private function showMessage(bool $res) : void
    {
        $html = "<div style='display: flex; justify-content: center; 
                             align-items: center; flex-direction: column'>";

        if($res){
            $html .= "<h1>Регистрация успешна</h1>";
            $html .= "<a href='/'>Вернутся на главную</a>";
            $html .= "</div>";

            echo $html;
        }else{
            $html .= "<h1 style='text-align: center'>Ошибка при регистрации</h1>";
            $html .= "<a href='/'>Вернутся на главную</a>";
            $html .= "</div>";

            echo $html;
        }
    }

    public function __destruct()
    {
        mysqli_close($this->connect);
    }
}
