<?php require_once "./components/header.php"; ?>
        <div class="mainContent">
            <div class="showMainContent">
                <div class="form">
                    <form action="/app/orders/pool.php" class="pool" method="POST">
                        <p>
                            <label for="obich">Дневной</label>
                            <input type="radio" class="inp" id="obich" name="radio[]" value="1">
                            <label for="lux">Месячный</label>
                            <input type="radio" class="inp" id="lux" name="radio[]" value="2">
                        </p>
                        <p>
                            <label for="date">Выбрать дату</label>
                            <input type="date" id="date" name="calendar" class="inp">
                        </p>
                        <p>
                            <input type="email" class="inp" name="name" placeholder="E-mail" required autocomplete="off">
                            <input type="submit" class="btn" value="Оплатить">
                        </p>
                    </form>
                </div>
            </div>
        </div>

<?php require_once "./components/footer.php"; ?>