<?php
require_once "inc/lib.inc.php";
set_error_handler("myError");
require_once "inc/data.inc.php";
/* * Получаем текущий час в виде строки от 00 до 23 * 
и приводим строку к целому числу от 0 до 23 */
// Установка локали и даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y');
$hour = (int)strftime('%H');
$welcome = '';// Инициализируем переменную для приветствия

if ($hour >= 0 && $hour < 6) {
  $welcome = "Доброй ночи";
}else if($hour >= 6 && $hour < 12) {
  $welcome = "Доброе утро";
}else if($hour >= 12 && $hour < 18) {
  $welcome = "Добрый день";
}else if ($hour >= 18 && $hour < 23) {
  $welcome = "Добрый вечер";
}else {
  $welcome = "Доброй ночи";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
      require_once "inc/top.inc.php";
    ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome?>, Гость</h1>
    <!-- Заголовок -->
    <blockquote>
      <?php
      echo "Сегодня $day, $mon, $year";
      ?>
    </blockquote>
    <!-- Область основного контента -->
    <?php
      require_once "inc/index.inc.php";
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php
      require_once "inc/menu.inc.php";
    ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
      require_once "inc/bottom.inc.php";
    ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>