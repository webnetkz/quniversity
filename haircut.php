<?php require_once "./components/header.php"; ?>

        <div class="mainContent">
            <div class="showMainContent">
                <h1>Парикмахерская</h1>
                <h3>Постригись у лучших мастеров</h3>
                <button class="btnRed" onclick="location.href = '/haircut.php'">Подробней</button>
            </div>
        </div>
<?php require_once "./components/footer.php"; ?>
<script>
    document.querySelector('.mask').classList.add('maskThree');
    document.querySelector('.mask').classList.remove('mask');
    document.querySelector('body').style.cssText = 'background: linear-gradient(170deg, #b9deed,#EECFBA, #b6481f 80%);';
    document.querySelector('path').style.fill = '#b6481f';
</script>