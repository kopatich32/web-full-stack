<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>

<div class="auth-container">
    <div class="auth-form-wrapper">
        <h2 class="auth-title">Регистрация</h2>
        <form class="auth-form" method="POST" action="/registr.php">
			<input type="hidden" name="REGISTRATION" value="Y">
            <div class="form-group">
                <label for="register-name">Полное имя</label>
                <input type="text" id="register-name" name="LOGIN" placeholder="Введите ваше полное имя" required>
            </div>

<!--            <div class="form-group">-->
<!--                <label for="register-email">Email</label>-->
<!--                <input type="email" id="register-email" name="EMAIL" placeholder="Введите ваш email" required>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="register-phone">Номер телефона</label>-->
<!--                <input type="tel" id="register-phone" name="PERSONAL_PHONE" class="phone" placeholder="Введите номер телефона">-->
<!--            </div>-->

            <div class="form-group">
                <label for="register-password">Пароль</label>
                <input type="password" id="register-password" name="PASSWORD" placeholder="Создайте пароль" required>
            </div>

<!--            <div class="form-group">-->
<!--                <label for="register-confirm-password">Подтвердите пароль</label>-->
<!--                <input type="password" id="register-confirm-password" name="CONFIRM_PASSWORD" placeholder="Подтвердите пароль" required>-->
<!--            </div>-->

            <button type="submit" class="auth-btn">Зарегистрироваться</button>
        </form>

        <div class="auth-links">
            <p>Уже есть аккаунт? <a href="/login/">Войти</a></p>
            <p><a href="/forget.php">Забыли пароль?</a></p>
        </div>
    </div>
</div>

<style>
.auth-container {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.auth-form-wrapper {
    background-color: #f3f3f3;
    padding: 3rem;
    border-radius: 15px;
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    position: relative;
}

.auth-title {
    text-align: center;
    margin-bottom: 2rem;
    color: #333;
    font-size: 2.5rem;
    font-weight: 600;
}

.auth-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    width: 100%;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 0.5rem;
    color: #333;
}

.form-group input {
    font-size: 1rem;
    padding: 1rem 1.5rem;
    border: 1px solid #ddd;
    border-radius: 0.5rem;
    background-color: white;
    width: 100%;
    box-sizing: border-box;
    outline: none;
    transition: border-color 0.3s ease;
}

.form-group input:focus {
    border-color: var(--primary, #9a8cc1);
    box-shadow: 0 0 0 2px rgba(154, 140, 193, 0.2);
}

.auth-btn {
    padding: 1rem 2rem;
    background-color: var(--primary, #9a8cc1);
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    align-self: center;
    width: auto;
    margin-top: 1rem;
    font-weight: 600;
    min-width: 200px;
}

.auth-btn:hover {
    background-color: #a090c0;
}

.auth-links {
    text-align: center;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid #ddd;
}

.auth-links p {
    margin: 0.5rem 0;
    color: #666;
}

.auth-links a {
    color: var(--primary, #9a8cc1);
    text-decoration: none;
    font-weight: 500;
}

.auth-links a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .auth-form-wrapper {
        padding: 2rem;
        margin: 1rem;
    }
    
    .auth-title {
        font-size: 2rem;
    }
}

</style>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
