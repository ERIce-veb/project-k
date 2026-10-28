<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Nebuline</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <!-- ШАПКА -->
    <?php include '../header.php'; ?>

    <!-- БЛОК РЕГИСТРАЦИИ -->
    <section class="auth-split">
        
        <div class="auth-left">
            <div class="auth-form-box">
                <div class="auth-tabs">
                    <a href="login.php" class="auth-tab">Вход</a>
                    <a href="registration.php" class="auth-tab active">Регистрация</a>
                </div>
                
                <form class="auth-form">
                    <div class="input-group">
                        <span class="input-icon">👤</span>
                        <input type="text" placeholder="Ваше имя" required>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">✉️</span>
                        <input type="email" placeholder="E-mail" required>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-icon">🔒</span>
                        <input type="password" placeholder="Придумайте пароль*" required>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="policy" required>
                        <label for="policy">Соглашение с политикой конфиденциальности</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary auth-btn">Зарегистрироваться</button>
                </form>
            </div>
        </div>

        <div class="auth-right">
            <div class="auth-gradient-overlay"></div>
            <img src="../assets/images/Вход.png" alt="Космос" class="auth-bg-img">
        </div>

    </section>

    <!-- ПОДВАЛ -->
    <?php include '../footer.php'; ?>

</body>
</html>