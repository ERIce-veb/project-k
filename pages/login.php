    <!-- ШАПКА -->
    <?php include '../header.php'; ?>

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
    <?php include '../footer.php'; ?>