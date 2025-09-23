document.addEventListener('DOMContentLoaded', function() {
    // Обработка форм авторизации на отдельных страницах
    const authForms = document.querySelectorAll('.auth-form');
    
    authForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Получаем данные формы
            const formData = new FormData(this);
            const formType = this.closest('.auth-form-wrapper').querySelector('.auth-title').textContent;
            
            // Простая валидация
            const inputs = this.querySelectorAll('input[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#e74c3c';
                } else {
                    input.style.borderColor = '#ddd';
                }
            });
            
            // Проверка совпадения паролей для регистрации
            if (formType === 'Регистрация') {
                const password = this.querySelector('#register-password');
                const confirmPassword = this.querySelector('#register-confirm-password');
                
                if (password && confirmPassword && password.value !== confirmPassword.value) {
                    isValid = false;
                    confirmPassword.style.borderColor = '#e74c3c';
                    alert('Пароли не совпадают!');
                } else {
                    // let formData = formData;
                    let dataVal = JSON.stringify({
                        "REGISTRATION": this.querySelector('input[name="REGISTRATION"]').value,
                        "LOGIN": this.querySelector('#register-name').value,
                        "PASSWORD": this.querySelector('#register-password').value
                    });
                    console.log(dataVal)
                    fetch("reg.php", {
                        method: 'POST',
                        body: dataVal,
                        headers: {
                            'Accept': 'application/json'
                        },
                    })
                        .then(resp => resp.json())
                        .then(data => () => {
                            console.log(data)
                        })
                }
            }
        });

    });
});

// Profile Page Functionality
function initProfilePage() {
    // Обработчик для кнопки выхода
    const logoutBtn = document.querySelector('.btn-logout');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to logout?')) {
                // В реальном приложении здесь был бы AJAX-запрос на сервер
                alert('You have been logged out');
                window.location.href = '/index.php';
            }
        });
    }

    // Обработчик для кнопки удаления аккаунта
    const deleteBtn = document.querySelector('.btn-delete');
    if (deleteBtn) {
        deleteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                alert('Account deleted successfully');
                window.location.href = '/index.php';
            }
        });
    }

    // Обработчики для кнопок настроек
    const settingButtons = document.querySelectorAll('.btn-secondary');
    settingButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent;
            alert(`${action} feature will be implemented soon!`);
        });
    });
}

// Инициализация функционала профиля при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, что мы на странице профиля
    if (document.querySelector('.profile-container')) {
        initProfilePage();
    }
});