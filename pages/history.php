<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История Вселенной - Nebuline</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- ШАПКА -->
    <header class="header">
        <div class="container header-container">
            <div class="logo"><img src="../assets/images/Logo.png" alt="Логотип" height="50"></div>
            <nav class="nav">
                <a href="../index.php" class="nav-link">Главная</a>
                <a href="solar-system.php" class="nav-link">Солнечная система</a>
                <a href="history.php" class="nav-link">История Вселенной</a>
                <a href="sale.php" class="nav-link">Особое</a>
                <a href="gallery.php" class="nav-link">Галерея</a>
                <a href="about.php" class="nav-link">О нас</a>
            </nav>
            <a href="login.php" class="login-btn">
                <img src="../assets/images/Вход иконка.png" width="40" height="auto" alt="Вход">
            </a>
        </div>
    </header>

    <!-- ЗАГОЛОВОК -->
    <section class="history-hero">
        <div class="container">
            <h1 class="hero-title">История Вселенной</h1>
            <p class="hero-subtitle">От Большого взрыва до наших дней</p>
        </div>
    </section>

    <!-- ТАЙМЛАЙН -->
    <section class="history-timeline">
        <div class="container">
            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="timeline-date">13.8 млрд лет назад</span>
                        <h3 class="timeline-title">Большой взрыв</h3>
                        <p class="timeline-text">Начало расширения пространства и времени. Вселенная возникла из
                            сингулярности, заполнившись энергией и элементарными частицами.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="../assets/images/взрыв.jpg" alt="Большой взрыв">
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-image">
                        <img src="../assets/images/рождение.jpg" alt="Первые звёзды">
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">13.6 млрд лет назад</span>
                        <h3 class="timeline-title">Рождение первых звёзд</h3>
                        <p class="timeline-text">Гравитация собрала водород и гелий в первые массивные звёзды. Они
                            освещали тёмную Вселенную и создавали тяжёлые элементы.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="timeline-date">13.2 млрд лет назад</span>
                        <h3 class="timeline-title">Формирование галактик</h3>
                        <p class="timeline-text">Звёзды и тёмная материя объединились в гигантские структуры. Так
                            появились спиральные, эллиптические и неправильные галактики.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="../assets/images/галактика.jpg" alt="Галактики">
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-image">
                        <img src="../assets/images/ПСС.jpg" alt="Солнечная система">
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-date">4.6 млрд лет назад</span>
                        <h3 class="timeline-title">Появление Солнечной системы</h3>
                        <p class="timeline-text">Из газопылевого диска сформировались Солнце и планеты. Земля стала
                            каменистым миром, готовым принять жизнь.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="timeline-date">3.8 млрд лет назад</span>
                        <h3 class="timeline-title">Зарождение жизни</h3>
                        <p class="timeline-text">В океанах Земли появились первые одноклеточные организмы. Началась
                            долгая эволюция, приведшая к разнообразию жизни.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="../assets/images/3d-space-scene 1.png" alt="Жизнь на Земле">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ПОДВАЛ -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-logo">
                <div class="logo">Nebuline</div>
            </div>
            <div class="footer-sections">
                <h4>Разделы</h4>
                <ul>
                    <li><a href="../index.php">Главная</a></li>
                    <li><a href="solar-system.php">Солнечная система</a></li>
                    <li><a href="history.php">История Вселенной</a></li>
                    <li><a href="sale.php">События</a></li>
                    <li><a href="gallery.php">Галерея</a></li>
                    <li><a href="about.php">О нас</a></li>
                </ul>
            </div>
            <div class="footer-resources">
                <h4>Ресурсы</h4>
                <div class="resources-logos">
                    <div class="resource-placeholder"><img src="../assets/images/NASA.png" alt="NASA"></div>
                    <div class="resource-placeholder"><img src="../assets/images/ESA.png" alt="ESA"></div>
                    <div class="resource-placeholder"><img src="../assets/images/Webb.png" alt="Webb"></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Путешествие по Вселенной. Все права защищены.</p>
        </div>
    </footer>

</body>

</html>