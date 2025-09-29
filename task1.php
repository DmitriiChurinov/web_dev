<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
    <form method="get" action="">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = (int)htmlspecialchars($_GET['age']);

        echo "<p>Привет, $name! Тебе $age лет.</p>";

        if ($age >= 18) {
            echo "<p>Ты совершеннолетний.</p>";
        } else {
            echo "<p>Ты несовершеннолетний.</p>";
        }
    }
    ?>
</body>
</html>
