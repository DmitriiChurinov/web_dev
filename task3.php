<?php
session_start(); // запускаем сессию

if (!isset($_SESSION['visits'])) {
    // Первый визит
    $_SESSION['visits'] = 1;
    $message = "Привет! Добро пожаловать на сайт!";
} else {
    // Повторный визит
    $_SESSION['visits']++;
    $message = "С возвращением! Это ваш " . $_SESSION['visits'] . " визит.";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Система посещений</title>
</head>
<body>
    <h2><?php echo $message; ?></h2>
</body>
</html>
