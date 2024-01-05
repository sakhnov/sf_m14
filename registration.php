<?php include('header.php');?>
            <main>
                <div class="container">    
                    <div class="row">
                        <div class="col col-lg-6 offset-lg-3 mt-5">
                            <h2 class="mb-3">Регистрация</h2>
                            <form method="post">
                                <input type="hidden" name="registration" value="1">
                                <div class="form-group">
                                    <label for="name">Логин</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите логин" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Пароль</label>
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Пароль" required>
                                </div>
                                <div class="form-group">
                                    <label for="birthday">День рождения</label>
                                    <input type="date" class="form-control" min="1900-01-01" max="<?=date('Y-m-d');?>" id="birthday" name="birthday" required>
                                </div>                                
                                <div class="form-group text-right"><a href="login.php">Войти в личный кабинет</a></div>
                                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                            </form>
                            
                        </div>
                    </div>
                </div>                   
            </main>
<?php include('footer.php');?>