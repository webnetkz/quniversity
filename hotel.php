<?php require_once "./components/header.php"; ?>

        <div class="mainContent">
            <div class="showMainContent">
                <div class="form">
                    <form action="/app/orders/hotel.php" class="pool" method="POST">
                        <p>
                            <label for="obich">Номер</label>
                            <input type="radio" class="inp" id="obich" name="radio[]" value="normal" checked>
                            <label for="lux">Люкс</label>
                            <input type="radio" class="inp" id="lux" name="radio[]" value="lux">
                        </p>
                        <p>
                            <label for="date">Выбрать дату</label>
                            <input type="date" id="date" name="calendar" id="toDay" class="inp" value="<?php echo date("Y-m-d"); ?>">
                        </p>
                        <p>
                            <input type="email" class="inp" name="name" placeholder="E-mail" required autocomplete="off">
                            <input type="submit" class="btn g" value="Оплатить">
                        </p>
                    </form>
                </div>
            </div>
        </div>

<?php require_once "./components/footer.php"; ?>
<script>
    // Стили для отображения гостиницы
    document.querySelector('.mask').classList.add('maskTwo');
    document.querySelector('.mask').classList.remove('mask');
    document.querySelector('body').style.cssText = 'background: linear-gradient(170deg, #b9deed,#EECFBA, #287878 80%);';
    document.querySelector('path').style.fill = '#287878';
</script>