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
    <?php include '../header.php'; ?>

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
    <?php include '../footer.php'; ?>

</body>

</html>