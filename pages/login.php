<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Nebuline</title>
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
            <a href="login.html" class="login-btn">
                <img src="../assets/images/Вход иконка.png" width="40" height="auto" alt="Вход">
            </a>
        </div>
    </header>

    <!-- БЛОК ВХОДА -->
    <section class="auth-split">
        <div class="auth-left">
            <div class="auth-form-box">
                <div class="auth-tabs">
                    <a href="login.php" class="auth-tab active">Вход</a>
                    <a href="registration.php" class="auth-tab">Регистрация</a>
                </div>
                
                <form class="auth-form">
                    <div class="input-group">
                        <span class="input-icon">👤</span>
                        <input type="name" placeholder="Введите ваше имя" required>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">✉️</span>
                        <input type="email" placeholder="E-mail" required>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-icon">🔒</span>
                        <input type="password" placeholder="Введите пароль*" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary auth-btn">Войти</button>
                </form>
            </div>
        </div>

        <div class="auth-right">
            <div class="auth-gradient-overlay"></div>
            <img src="../assets/images/Вход.png" alt="Космос" class="auth-bg-img">
        </div>

    </section>

    <!-- ПОДВАЛ -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-logo"><div class="logo">Nebuline</div></div>
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
        <div class="footer-bottom"><p>&copy; 2025 Путешествие по Вселенной. Все права защищены.</p></div>
    </footer>

</body>
</html>