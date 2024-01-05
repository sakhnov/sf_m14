<?php include('header.php');?>
            <main>
            <div class="container">    
                <section class="banner">
                    <h1>SPA салон<br>в вашем городе</h1>
                    <?php if (getDaysUntilBirthday() === 0): ?>
                        <h3>Поздравляем с днем рождения!<br>И дарим вам скидку 10% на все услуги!</h3>
                    <?php elseif(getDaysUntilBirthday() === false):?>
                    <?php else: ?>    
                        <h3>Через <?= getDaysUntilBirthday(); ?> <?= echo_days(getDaysUntilBirthday()); ?> у вас день рождения!<br>Приходите в день рождения - с нас подарок!</h3>
                    <?php endif;?>    
                </section>
                <?php if (isset($_COOKIE['promotimer'])): ?>
                <section class="timer">
                    <?php 
                        $promotimer = $_COOKIE['promotimer'];
                        $time = $promotimer - time();
                        $hour_promo = floor(($time%86400)/3600);
                        $min_promo = floor(($time%3600)/60);
                        $sec_promo = $time%60;

                    ?>
                    <h4>Персональная скидка 7%<br>Осталось <?= $hour_promo; ?> ч. <?= $min_promo; ?> мин. <?= $sec_promo; ?> сек.</h4>
                </section>    
                <?php endif; ?>
                <section id="services" class="mt-5">
                    <h2 class="mb-3">Услуги SPA салона</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                        <div class="col mb-3">
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/rt_stocmann_dlya_dvoikh_2.jpg" alt="Программы и церемонии для двоих">
                                <div class="card-body">
                                    <h5 class="card-title">Программы и церемонии для двоих</h5>
                                    <p class="card-text">Для тех, кто хочет разделить минуты отдыха с любимым человеком</p>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/rt_bali_rio_seriya_raw_na_retush_29.jpg" alt="Балийские программы">
                                <div class="card-body">
                                    <h5 class="card-title">Балийские программы</h5>
                                    <p class="card-text">Особая направленнеость на работу с мышечной тканью</p>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/royal_thay_wellness_club_04_07_2023_17.jpg" alt="Программы по коррекции фигуры">
                                <div class="card-body">
                                    <h5 class="card-title">Программы по коррекции фигуры</h5>
                                    <p class="card-text">Курс корректирующих программ для достижения и поддержания идеальной формы тела</p>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/img_0587_small.jpg" alt="Профессиональный уход за лицом">
                                <div class="card-body">
                                    <h5 class="card-title">Профессиональный уход за лицом</h5>
                                    <p class="card-text">Расслабит уставшую за день кожу, снимет напряжение, исчезнут отеки</p>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/29f6a0855307b9b87ff8550797e3ef07.jpg" alt="Oil массажи и СПА программы">
                                <div class="card-body">
                                    <h5 class="card-title">Oil массажи и СПА программы</h5>
                                    <p class="card-text">Снятие напряжения, обновление, оздоровление и роскошный уход для всего тела</p>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>                                                                                 
                </section>
                <section id="promo" class="mt-5">
                    <h2 class="mb-3">Акции SPA салона</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                        <div class="col mb-3">
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/aktsii_detalnye_776kh400_dlya_dvoikh.jpg" alt="Скидка для двоих">
                                <div class="card-body">
                                    <h4 class="card-title">Скидка для двоих</h4>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/aktsii_detalnye_776kh400_dlya_novykh_klientov.jpg" alt="Для новых клиентов">
                                <div class="card-body">
                                    <h4 class="card-title">Для новых клиентов</h4>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div>    
                        <div class="col mb-3">    
                            <div class="card h-100" >
                                <img class="card-img-top" src="images/aktsii_detalnye_776kh400_schastlivye_chasy.jpg" alt="Счастливые часы">
                                <div class="card-body">
                                    <h4 class="card-title">Счастливые часы</h4>
                                    <a href="#" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div> 
                        </div> 
                    </div>                        
                </section>
            </div>                   
            </main>
<?php include('footer.php');?>