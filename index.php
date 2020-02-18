<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <script src="public/js/password-check.js"></script>
</head>
<body>
<div class="container">
    <h1>Регистрация</h1>
    <form action="src/registration.php" method="post">
        <label>
            <span>Имя</span>
            <input required type="text" name="firstName" placeholder="введите имя...">
        </label>
        <label>
            <span>Фамилия</span>
            <input required type="text" name="lastName" placeholder="введите фамилию...">
        </label>
        <label>
            <span>Возраст</span>
            <input required type="number" name="age" placeholder="введите возраст...">
        </label>
        <label>
            <span>Имейл</span>
            <input required type="email" name="email" placeholder="введите имейл...">
        </label>
        <label>
            <span>Пароль</span>
            <input required type="password" name="password" minlength="4"
                   placeholder="введите пароль...">
        </label>
        <label id="lastLabel">
            <span>Подтвердите пароль</span>
            <input required type="password" name="rePassword" minlength="4"
                   placeholder="введите пароль еще раз...">
        </label>
        <div class="btn">
            <button type="submit" name="btnSubmit">Зарегистрироваться</button>
        </div>
    </form>
</div>
</body>
</html>
