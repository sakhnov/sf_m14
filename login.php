<?php include('header.php');

// если авторизованы
if (getCurrentUser()) { ?>
    <main>
        <div class="container">    
            <div class="row">
                <div class="col mt-5">
                    <h2 class="mb-3">Добрый день, <?= getCurrentUser() ?>!</h2>
                    <p>День рождения: <?= date('d-m-Y', getCurrentUserBirthday()); ?></p>
                    
                    <?php if (getDaysUntilBirthday() != 0): ?>
                        <p>Ваш день рождения через <?= getDaysUntilBirthday(); ?> <?= echo_days(getDaysUntilBirthday()); ?>!</p>
                    <?php else: ?>   
                        <p><b>Поздравляем с днем рождения!<br>И дарим вам скидку 10% на все услуги!</b></p>
                    <?php endif; ?>    
                    <p><a href="index.php">Вернуться на главную</a></p>
                    <p><a href="index.php?logout=1">Выйти из личного кабинета</a></p>
                </div>
            </div>
        </div>
    </main>            

<?php } else { ?>

    <main>
        <div class="container">    
            <div class="row">
                <div class="col col-lg-6 offset-lg-3 mt-5">
                    <h2 class="mb-3">Войти в личный кабинет</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Логин</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Введите логин">
                        </div>
                        <div class="form-group">
                            <label for="pass">Пароль</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Пароль">
                        </div>
                        <div class="form-group text-right"><a href="registration.php">Регистрация</a></div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
                    
                </div>
            </div>
        </div>                   
    </main>
<?php } ?>
<?php include('footer.php');?>