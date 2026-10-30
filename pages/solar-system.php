<div class="main-solar">
        <!-- ШАПКА -->
        <?php include '../header.php'; ?>

        <!-- ЗАГОЛОВОК СТРАНИЦЫ -->
        <section class="solar-hero">
            <div class="container">
                <h1 class="hero-title">Добро пожаловать<br>в Солнечную систему</h1>
            </div>
        </section>

        <!-- КАРТОЧКИ ПЛАНЕТ -->
        <section class="solar-cards">
            <div class="container">

                <a href="planet-detail.php" class="planet-card card-sun">
                    <div class="card-img-wrapper">
                        <img src="../assets/images/Солнце.png" alt="Солнце" class="planet-img no-shadow">
                    </div>
                    <h3 class="card-title">Солнце</h3>
                    <p class="card-text">Звезда в центре нашей системы. Даёт свет и тепло, без которых жизнь на Земле
                        была
                        бы невозможна. Диаметр в 109 раз больше земного.</p>
                    <span class="btn btn-primary">Подробнее</span>
                </a>

                <!-- Сетка планет -->
                <div class="planets-grid">
                    <!-- Меркурий -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Меркурий.png" alt="Меркурий" class="planet-img">
                        </div>
                        <h3 class="card-title">Меркурий</h3>
                        <p class="card-text">Ближайшая к Солнцу планета. Температурные перепады от +430°C днём до −180°C
                            ночью. Год длится всего 88 земных дней.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Венера -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Венера.png" alt="Венера" class="planet-img">
                        </div>
                        <h3 class="card-title">Венера</h3>
                        <p class="card-text">Самая горячая планета — +465°C. Плотная атмосфера из углекислого газа и
                            облаков
                            серной кислоты. Вращается в обратную сторону.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Земля -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Земля.png" alt="Земля" class="planet-img">
                        </div>
                        <h3 class="card-title">Земля</h3>
                        <p class="card-text">Единственная известная планета с жизнью. 71% поверхности покрыто водой.
                            Находится в «зоне обитаемости».</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Марс -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Марс.png" alt="Марс" class="planet-img">
                        </div>
                        <h3 class="card-title">Марс</h3>
                        <p class="card-text">Красная планета. Имеет самую высокую гору в Солнечной системе — Олимп (22
                            км).
                            Полярные шапки из льда.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Юпитер -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Юпитер.png" alt="Юпитер" class="planet-img">
                        </div>
                        <h3 class="card-title">Юпитер</h3>
                        <p class="card-text">Крупнейшая планета — в 2.5 раза массивнее всех остальных вместе взятых.
                            Газовый
                            гигант с Большим Красным Пятном.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Сатурн -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Сатурн.png" alt="Сатурн" class="planet-img">
                        </div>
                        <h3 class="card-title">Сатурн</h3>
                        <p class="card-text">Известен своей системой колец из льда и камней. Вторая по величине планета.
                            Имеет более 80 спутников.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Уран -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Уран.png" alt="Уран" class="planet-img">
                        </div>
                        <h3 class="card-title">Уран</h3>
                        <p class="card-text">Ледяной гигант. Вращается «лёжа на боку» — наклон оси 98 градусов.
                            Температура
                            до −224°C.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>

                    <!-- Нептун -->
                    <a href="planet-detail.php" class="planet-card">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/Нептун.png" alt="Нептун" class="planet-img">
                        </div>
                        <h3 class="card-title">Нептун</h3>
                        <p class="card-text">Самая далёкая планета. Ветры достигают скорости 2100 км/ч. Ярко-синий цвет
                            из-за метана в атмосфере.</p>
                        <span class="btn btn-primary">Подробнее</span>
                    </a>
                </div>

            </div>
        </section>
    </div>

    <!-- ПОДВАЛ -->
    <?php include '../footer.php'; ?>