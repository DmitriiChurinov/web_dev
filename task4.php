<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список товаров</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgreen;
        }
    </style>
</head>
<body>
<?php
// Определяем класс Product
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDiscountedPrice($percent) {
        return $this->price - ($this->price * $percent / 100);
    }
}

// Создаём товары
$product1 = new Product("Стул", 10000);
$product2 = new Product("Стол", 5000);
$product3 = new Product("Шкаф", 12000);


$products = [$product1, $product2, $product3];
?>

<h2>Каталог товаров</h2>

<table>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Цена со скидкой 10%</th>
    </tr>

    <?php foreach ($products as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p->name) ?></td>
            <td><?= number_format($p->price, 0, ',', ' ') ?></td>
            <td><?= number_format($p->getDiscountedPrice(10), 0, ',', ' ') ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
