<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планета Солнечной системы - Nebuline</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- ШАПКА -->
    <?php include '../header.php'; ?>

    <!-- КОНТЕНТ ПЛАНЕТЫ -->
    <div class="main-planet">
        <section class="planet-detail-hero">
            <div class="container">
                <h1 class="hero-title">Планета<br>Солнечной системы</h1>

                <div class="detail-card">
                    <div class="detail-left">
                        <div class="detail-img-wrapper">
                            <img src="../assets/images/Земля.png" alt="Земля" class="planet-img-large">
                        </div>
                        <h2 class="detail-planet-name">Земля</h2>
                        <p class="detail-desc">Единственная известная планета с жизнью. 71% поверхности покрыто водой.
                            Находится в «зоне обитаемости» — не слишком жарко и не слишком холодно.</p>
                    </div>

                    <div class="detail-right">
                        <ul class="detail-stats">
                            <li><strong>Расстояние от Солнца:</strong> 149,6 млн км</li>
                            <li><strong>Диаметр:</strong> 12,742 км</li>
                            <li><strong>Год:</strong> 365 дней</li>
                            <li><strong>Спутники:</strong> 1</li>
                        </ul>

                        <div class="detail-fact">
                            <h4>Интересный факт:</h4>
                            <p>Каждый день на Землю падает около 100 тонн космической пыли, но большая часть сгорает в
                                атмосфере.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ПОДВАЛ -->
    <?php include '../footer.php'; ?>

</body>

</html>