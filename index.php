<?php include 'header.php'; ?>

    <!--ПЕРВЫЙ БЛОК-->
    <section class="hero">
        <div class="container">
            <div class="hero-card">
                <div class="hero-content">
                    <h1 class="hero-title">КОСМОС ВНУТРИ НАС</h1>
                    <p class="hero-subtitle">каждый атом воспоминание о звездах</p>
                    <h2 class="hero-brand">Nebuline</h2>
                    <a href="#sections" class="btn btn-primary">Исследовать</a>
                </div>
                <img src="assets/images/Фон для заголовка.png" alt="Космос" class="hero-bg">
            </div>
        </div>
    </section>

    <!-- О ПРОЕКТЕ -->
    <section class="about-project">
        <div class="container">
            <div class="about-card">
                <div class="about-text">
                    <h2 class="section-title-left">О проекте</h2>
                    <h3 class="about-subtitle">Путешествие по Вселенной — это познавательный сайт о космосе и нашем
                        месте в нем</h3>
                    <p>Этот сайт создан для тех, кто хочет лучше понять Вселенную — не как набор фактов, а как целостную
                        систему, частью которой являемся и мы. Здесь нет сложных терминов без объяснений и пустых
                        обещаний.</p>
                    <p>Мы собрали материалы о Солнечной системе, истории Вселенной и современных научных открытиях.
                        Каждый раздел написан простым языком.</p>
                    <ul class="about-list">
                        <li><strong>Достоверность</strong> — информация проверяется по научным источникам</li>
                        <li><strong>Доступность</strong> — сложные понятия объясняются простым языком</li>
                        <li><strong>Без рекламы</strong> — сайт не продаёт услуги</li>
                        <li><strong>Атмосфера</strong> — дизайн помогает сосредоточиться</li>
                    </ul>
                </div>

                <div class="about-image-wrapper">
                    <div class="about-image-gradient"></div>
                    <img src="assets/images/О проекте.png" alt="О проекте" class="about-image">
                </div>
            </div>
        </div>
    </section>

    <!-- РАЗДЕЛЫ -->
    <section class="sections" id="sections">
        <div class="container">
            <h2 class="section-title">Исследуйте разделы</h2>
            <div class="sections-grid">
                <a href="pages/solar-system.php" class="section-card">
                    <div class="card-image1"></div>
                    <h3 class="card-title">Солнечная система</h3>
                </a>
                <a href="pages/sale.php" class="section-card">
                    <div class="card-image2"></div>
                    <h3 class="card-title">События</h3>
                </a>
                <a href="pages/history.php" class="section-card">
                    <div class="card-image3"></div>
                    <h3 class="card-title">История Вселенной</h3>
                </a>
                <a href="pages/gallery.php" class="section-card">
                    <div class="card-image4"></div>
                    <h3 class="card-title">Галерея</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- ПОПУЛЯРНЫЕ ВОПРОСЫ -->
    <section class="questions">
        <div class="container">
            <h2 class="section-title">Популярные вопросы</h2>
            <div class="questions-grid">
                <a href="pages/history.php">
                    <div class="question-card">
                        <div class="question-image1"></div>
                        <h3 class="question-title">Как рождаются звезды?</h3>
                        <p class="question-text">Процесс формирования звезд из газа и пыли в туманностях</p>
                    </div>
                </a>
                <a href="pages/solar-system.php">
                    <div class="question-card">
                        <div class="question-image2"></div>
                        <h3 class="question-title">Какая планета самая уникальная?</h3>
                        <p class="question-text">Интересные факты про планеты Солнечной системы</p>
                    </div>
                </a>
                <a href="pages/history.php">
                    <div class="question-card">
                        <div class="question-image3"></div>
                        <h3 class="question-title">Что такое Большой взрыв?</h3>
                        <p class="question-text">Момент рождения Вселенной 13.8 млрд лет назад</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ГАЛЕРЕЯ -->
    <section class="gallery-preview">
        <div class="container">
            <h2 class="section-title">Листая космос: галерея снимков</h2>

            <div class="gallery-blur-bg"></div>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/images/атмосфера.png" alt="Земля из космоса">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/андромеда.jpeg" alt="Галактика Андромеды">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/венерасолнце.png" alt="Венера на фоне Солнца">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/кассиопея.jpeg" alt="Туманность Кассиопея">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/сатурн.jpeg" alt="Сатурн">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/видуран.png" alt="Окрестности Урана">
                </div>
            </div>

            <div class="gallery-btn-container">
                <a href="pages/gallery.php" class="btn btn-primary">Посмотреть</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>