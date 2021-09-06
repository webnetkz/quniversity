<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/style.css">
    <link rel="stylesheet" href="/public/styles/mStyle.css">
    <title>Quniversity</title>
    <link rel="icon" href="/public/imgs/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="verticalText">KAZMKPU
        <img src="/public/imgs/logo_kz.png" style="height: 8rem; transform: rotate(90deg);opacity: 0.5">
    </div>
    <div class="mask">
    </div>
    <img src="/public/imgs/menu.png" class="mobileMenu" onclick="showMobileMenu()">
    <div class="content">
        <nav>
            <ul>
                <a href="/">
                    <li>Главная</li>
                </a>
                <a href="/hotel.php">
                    <li>Гостиница</li>
                </a>
                <a href="/pool.php">
                    <li>Бассейн</li>
                </a>
                <a href="/haircut.php">
                    <li>Парикмахерская</li>
                </a>
                <a href="/contact.php">
                    <li>Контакты</li>
                </a>
            </ul>
        </nav>

<script>
    // Отображет выбранный элемент меню
    document.querySelector('a[href="'+document.location.pathname+'"]').classList.add('activeMenu');
    // Меню для мобильников
    function showMobileMenu() {
        let myBtn = document.querySelector('.mobileMenu');
        let myNav = document.querySelector('nav');

        if(myNav.classList.contains('showMobileMenu')) {
            myNav.classList.remove('showMobileMenu');
        } else {
            myNav.classList.add('showMobileMenu');
        }
    }
</script>