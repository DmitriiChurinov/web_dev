<?php
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
    session_start();
}

if (!isset($_SESSION['visits'])) {
    // Первый визит
    $_SESSION['visits'] = 1;
    $message = "Привет! Добро пожаловать на сайт!";
} else {
    // Повторный визит
    $_SESSION['visits']++;
    $message = "С возвращением! Это ваш " . $_SESSION['visits'] . " визит.";
}
// Уничтожить сессию полностью
//session_destroy();
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
