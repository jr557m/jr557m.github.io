<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?php 
                    $title = 'Лабораторная работа 2';
                    echo $title;
                ?>
        </title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header class="header">
            <div class="contaner">
                <nav class="menu">
                <a href="<?php 
                                $ref = '#'; 
                                $text = 'Главная';
                                $current = true;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                    <a href="#about" class="navigation">Обо мне</a>
                    <a href="<?php 
                                $ref = 'skill.php'; 
                                $text = 'Навыки';
                                $current = false;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                    <a href="<?php 
                                $ref = 'technologies.php'; 
                                $text = 'Технологии';
                                $current = false;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                </nav>   
                <div class="text-center py-5">
                    <h1 class="name">Меняйлов Иван Денисович</h1>
                    <h2>Веб-разработчик</h2>
                    <p class="w-50 mx-auto my-3 ">
                        Добрый день!
                    </p>
                    <div class="mybuttonwritesme">
                    <a class="btn contact-me-btn" href="imeniailov@yandex.ru">Написать мне</a>
                </div>
                </div>
            </header>
            <main>
                <div class="contaner">
                    <section id="about">
                       <h1>Обо мне</h1>
                       <?php 
                    if(date("s") % 2 === 0){
                        $img_name = "image\person.png";
                    } else {
                        $img_name = "image\php.png";
                    }
                ?>

                <figure class="avatar">
                   <img src="<?= $img_name; ?>" alt="person"> 
                </figure>
                       <p>
                        Меня зовут Иван. Мне 19. Я проживаю в г. Москва. С 2020 года являюсь студентом Московского политехнического университета. На данный момент обучаюсь на втором курсе. Увлекаюсь программированием, выступлениями с презентацией, а также организационной деятельностью.
                    </p>
                </section> 
                <section id="skill">
                    <h1>Навыки</h1>
                    <p>
                        <ul>
                            <li>Умение расставлять приоритеты.</li>
                        <li>Умение работать в команде.</li>
                        <li>Лидерские качества</li>
                        <li>Эффективное решение проблем.</li>
                        <li>Уменяие найти выход из трудной ситуации</li>
                        <li>Способность к обучению</li>
                        <li>Навыки деловой переписки</li>
                        <li>Навыки делового общения</li>
                        <li>Навыки проведения презентаций</li>
                        </ul>
                    </p>
                    <div class="button-right">
                    <a  class="mybutton" href="skill.php">Подробнее</a>
                </div>
                </section>   

                    <section id="technologies">
                    <h1>Технологии</h1>
                    <p>
                        Технологии, в которых я разбираюсь:
                    </p>
                    
                    <ul>
                        <li>HTML</li>
                        <li>JavaScript</li>
                        <li>CSS</li>
                    </ul>
                    <div class="button-right">
                        <a  class="mybutton" href="technologies.php">Подробнее</a>
                    </div>
                    </section>
                   
                </div>
            </main>
        
                <footer class="footer">
                    <div class="contaner">
                        &copy; Меняйлов И. Д.
                        <?php
                    date_default_timezone_set("Europe/Moscow");
                    echo '<p> Сформировано '.date("d-m-Y H:i:s").'</p>';
                ?>
                    </div>
                </footer>
        
    </body>
    </html>