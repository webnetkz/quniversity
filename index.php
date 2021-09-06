<?php require_once "./components/header.php"; ?>

        <div class="mainContent">

        </div>
<?php require_once "./components/footer.php"; ?>

<script>
    function slider() {
        let mainContent = document.querySelector('.mainContent');
        let mask = document.querySelector('.mask');

        let hotel = '<div class="showMainContent"><h1>Гостиница</h1><h3>Приобретите абонимент по выгодной цене</h3><button class="btnRed" onclick="location.href = \'/pool.php\'">Подробней</button></div>';
        let haircut = '<div class="showMainContent"><h1>Парикмахерская</h1><h3>Постригись у лучших мастеров</h3><button class="btnRed" onclick="location.href = \'/haircut.php\'">Подробней</button></div>';
        let pool = '<div class="showMainContent"><h1>Гостиница</h1><h3>В нашей гостинице Вы почувствуете уют</h3><button class="btnRed" onclick="location.href = \'/hotel.php\'">Подробней</button></div>';

        mainContent.innerHTML = pool;


        
        setTimeout(() => {
            mainContent.innerHTML = hotel;
            mask.classList.add('maskTwo');
            document.querySelector('body').style.cssText = 'background: linear-gradient(170deg, #b9deed,#EECFBA, #287878 80%);';
            document.querySelector('path').style.fill = '#287878';
            mask.classList.remove('mask');
        }, 5000);
        setTimeout(() => {
            mainContent.innerHTML = haircut;
            let maskTwo = document.querySelector('.maskTwo');
            maskTwo.classList.add('maskThree');
            document.querySelector('body').style.cssText = 'background: linear-gradient(170deg, #b9deed,#EECFBA, #b6481f 80%);';
            document.querySelector('path').style.fill = '#b6481f';
            maskTwo.classList.remove('maskTwo');
        }, 10000);
        setTimeout(() => {
            let maskThree = document.querySelector('.maskThree');
            maskThree.classList.add('mask');
            document.querySelector('body').style.cssText = 'background: linear-gradient(170deg, #b9deed,#EECFBA, #082f9b 80%);';
            document.querySelector('path').style.fill = '#082f9b';
            maskThree.classList.remove('maskThree');

            slider();
        }, 15000);
    }
    slider();
</script>