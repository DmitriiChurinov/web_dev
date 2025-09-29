<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form method="post" action="">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <input type="submit" value="Зарегистрироваться">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // создаем ассоциативный массив
            $user = [
                "Имя" => $name,
                "Email" => $email,
                "Пароль" => $password
            ];

            echo "<h3>Регистрация прошла успешно!</h3>";
            echo "<pre>";
            print_r($user);
            echo "</pre>";
        } else {
            echo "<p style='color:red;'>Некорректный email!</p>";
        }
    }
    ?>
</body>
</html>
