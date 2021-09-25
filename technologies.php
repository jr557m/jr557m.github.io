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
                    $ref = 'skill.php'; 
                    $text = 'Навыки';
                    $current = false;
                    echo $ref;
                ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
        <a href="<?php 
                    $ref = '#'; 
                    $text = 'Технологии';
                    $current = true;
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
                    <a class="btn contact-me-btn" href="imenyaylov@yandex.ru">Написать мне</a>
                </div>
                </div>
            </header>
            <main>
                <div class="contaner">
        
                   
                    <h1>Технологии</h1>
                    <p>
                        <p>
                            Технологии, в которых я разбираюсь:
                        </p>
                        
                        <ul>
                            <li>HTML</li>
                            <li>JavaScript</li>
                            <li>CSS</li>
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