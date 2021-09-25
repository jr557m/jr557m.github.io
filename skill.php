<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Веб-разработчик Меняйлов И.Д.</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header class="header">
            <div class="contaner">
                <nav class="menu">
                    <a href="<?php 
                    $ref = 'index.php'; 
                    $text = 'Главная';
                    $current = false;
                    echo $ref;
                ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
        <a href="<?php 
                    $ref = '#'; 
                    $text = 'Навыки';
                    $current = true;
                    echo $ref;
                ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
        <a href="<?php 
                    $ref = 'technologies.php'; 
                    $text = 'Технологии';
                    $current = false;
                    echo $ref;
                ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
    </nav> 
                </nav>   
                <div class="text-center py-5">
                    <h1 class="name">Меняйлов Иван Денисович</h1>
                    <h2>Веб-разработчик</h2>
                    <p class="w-50 mx-auto my-3 ">
                        Добрый день!
                    </p>
                    <div class="mybuttonwritesme">
                    <a class="btn contact-me-btn" href="imenyaylov@yandex.ru">Написать мне</a>
                </div>
                </div>
            </header>
            <main>
                <div class="contaner">
        
                   
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
                </section>   
                   
                </div>
            </main>
            <footer class="footer">
                <div class="contaner">
                    &copy; Меняйлов И. Д.
                </div>
            </footer>
    </body>
    </html>