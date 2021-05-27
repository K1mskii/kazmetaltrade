<?php 
    include_once("./php/bd.php"); 
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Приём лома и металлобработка - KazMetalTrade</title>
    <link rel="icon" type="image/ico" sizes="32x32" href="img/favicon 32x32.ico">
    <link rel="icon" type="image/ico" sizes="16x16" href="img/favicon 16x16.ico">
    <meta name="description"
        content="ТОО KazMetalTrade, занимается оптовой торговлей лома цветных и черных металлов. Мы производим покупку лома цветных и черных металлов по высоким ценам, как от населения (физических лиц), так и у юридических лиц.​">
    <!--===============================================================================================-->
    <meta name="Keywords"
        content="Металл, metal, металлообработка в Алматы, сдать металл, прием металлолома, прием лома, KazMetalTrade, KazMetal, kazmetal, kazmetaltrade.kz, kazmetaltrade">
    <!--===============================================================================================-->
    <link rel="canonical" href="https://kazmetaltrade.kz/" />
    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="libs/slick/slick.css" />
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="libs/sweetalert.min.css">
  </head>
<body>
    <table class="storyPrice">
        <tbody class="storyPrice__tbody">
            <tr class="storyPrice__tr">
                <th class="storyPrice__th">Наименование</th>
                <th class="storyPrice__th">Засор, %</th>
                <th class="storyPrice__th">Цена, ₸</th>
            </tr>
            <?php
                require("./php/bd.php");
                if (isset($_GET['title'])) {
                    $sql = "SELECT * FROM products WHERE title = :title";
                    $stmt = $db->prepare($sql);
                    $stmt->bindValue(':title', $_GET['title']);
                    $stmt->execute();
                    $storyPrice = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $sql = "SELECT * FROM products";
                    $result = $db->query($sql);
                    $storyPrice = $result->fetchAll(PDO::FETCH_ASSOC);
                }

                foreach ($storyPrice as $storyProduct) {
                    include('./templates/storyPrice.php');
                }
            ?>
            <th class="storyPrice__date">Дата составления: 27.04.2021г.</th>
            <th class="storyPrice__date">Алматы</th>
            <th class="storyPrice__date"></th>
        </tbody>
    </table>
    <table class="storyPrice">
        <tbody class="storyPrice__tbody">
            <tr class="storyPrice__tr">
                <th class="storyPrice__th">Наименование</th>
                <th class="storyPrice__th">Засор, %</th>
                <th class="storyPrice__th">Цена, ₸</th>
            </tr>
            <?php
                require("./php/bd.php");
                if (isset($_GET['title'])) {
                    $sql = "SELECT * FROM products_shym WHERE title = :title";
                    $stmt = $db->prepare($sql);
                    $stmt->bindValue(':title', $_GET['title']);
                    $stmt->execute();
                    $storyPrice = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $sql = "SELECT * FROM products_shym";
                    $result = $db->query($sql);
                    $storyPrice = $result->fetchAll(PDO::FETCH_ASSOC);
                }

                foreach ($storyPrice as $storyProduct) {
                    include('./templates/storyPrice.php');
                }
            ?>
            <th class="storyPrice__date">Дата составления: 12.05.2021г.</th>
            <th class="storyPrice__date">Шымкент</th>
            <th class="storyPrice__date"></th>
        </tbody>
    </table>
</body>

</html>