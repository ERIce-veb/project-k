<?php
date_default_timezone_set('Asia/Yekaterinburg');
$current_hour = (int)date('G');
if ($current_hour >= 6 && $current_hour < 20) {
    $theme_class = 'light-theme';
} else {
    $theme_class = 'dark-theme';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebuline - Путешествие по Вселенной</title><link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo $theme_class; ?>">

<header class="header">
    <div class="container header-container">
        <div class="logo"><img src="../assets/images/Logo.png" alt="Логотип" height="50"></div>
        <nav class="nav">
            <a href="/index.php" class="nav-link">Главная</a>
            <a href="/pages/solar-system.php" class="nav-link">Солнечная система</a>
            <a href="/pages/history.php" class="nav-link">История Вселенной</a>
            <a href="/pages/sale.php" class="nav-link">Особое</a>
            <a href="/pages/gallery.php" class="nav-link">Галерея</a>
            <a href="/pages/about.php" class="nav-link">О нас</a>
        </nav>
        <a href="login.php" class="login-btn">
            <img src="../assets/images/Вход иконка.png" width="40" height="auto" alt="Вход">
        </a>
    </div>
</header>
