<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея - Nebuline</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- ШАПКА -->
    <?php include '../header.php'; ?>

    <!-- ЗАГОЛОВОК -->
    <section class="page-hero">
        <div class="container">
            <h1 class="hero-title">Галерея снимков</h1>
            <p class="page-subtitle">Визуальное путешествие по глубинам космоса</p>
        </div>
    </section>

    <!-- СЕТКА ГАЛЕРЕИ -->
    <section class="gallery-page">
        <div class="container">
            <div class="gallery-grid-custom">
                <div class="gallery-box"><img src="../assets/images/История Вселенной.jpg" alt="Космос 1"></div>
                <div class="gallery-box"><img src="../assets/images/андромеда.jpeg" alt="Космос 2"></div>
                <div class="gallery-box"><img src="../assets/images/галактика.jpg" alt="Космос 3"></div>
                <div class="gallery-box"><img src="../assets/images/кассиопея.jpeg" alt="Космос 4"></div>
                <div class="gallery-box"><img src="../assets/images/венерасолнце.png" alt="Космос 5"></div>
                <div class="gallery-box"><img src="../assets/images/Уран.png" alt="Космос 6"></div>
            </div>
        </div>
    </section>

    <!-- ПОДВАЛ -->
    <?php include '../footer.php'; ?>

</body>

</html>