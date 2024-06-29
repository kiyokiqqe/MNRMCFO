<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' type="text/css" href='css/styles_i_.css'>
    <link rel="stylesheet" type="text/css" href="css/stylesfornews.css">
    <link rel="stylesheet" type="text/css" href="css/stylesforhistory.css">
    <link rel="stylesheet" type="text/css" href="css/stylesforcard.css">
    <link rel="stylesheet" type="text/css" href="css/stylesforregandlog.css">
    <link rel="stylesheet" type="text/css" href="css/stylesforcoment.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <title>Медичний центр</title>
</head>
<body>

<div class='header'>
    <div class='container'>
        <div class='header-line'>
            <div class='header-logo'><img src="img/logo.png" alt=""></div>

            <div class='nav'>
                <a class='nav-item' href="">Головна</a>
                <a class='nav-item' href="">Відділення</a>
                <a class='nav-item' href="">Послуги</a>
                <!-- <a class='nav-item' href="">Оплата</a> -->
                <a class='nav-item' href="">Про нас</a>
            </div>

            <div class='mesages'>
                <a href="#"><img class='mesages-img' src="img/mesages.png" alt=""></a>
            </div>

            <div class='phone'>
                <div class='phone-holder'>
                    <div class='phone-img'><img src="img/phone.png" alt=""></div>
                    <div class='number'>  
                        <a class='num' href='https://www.instagram.com/qw_of_xxe/'>+380-984-557-395</a>
                    </div>
                </div>

                <div class='phone-text'>Зв'яжіться для консультації</div>

            </div>

            <div class='btn'><a class='button' href='#'>Запис на прийом</a></div>

        </div>

        <div class='header-down'>
            <div class='header-title'>Ласкаво просимо до

                <div class='header-subtitle'>Нашого сайту</div>

                <div class='header-suptitle'>здоров'я найцінніше</div>

                <div class='header-bth'>
                    <a href='personal_cabinet.php' class='header-button' id='header-button-pos'>Особистий кабінет</a>
                </div>

            </div>
        </div>

    </div>
</div>

<div class='cards'>
    <div class='container'>
       <div class='cards-holder'>

            <div class='card'>
                <div class='card-image'><img class='card-img' src='img/card1.png'></div>
                <div class='card-title'>Якісне <span> Лікування</span></div>
                <div class='card-desc'>Звертайтеся до стоматолога щорічно на огляд та чистку, а також при будь-яких болях чи проблемах в зубах.</div>
            </div>

            <div class='card'>
                <div class='card-image'><img class='card-img' src='img/card2.png'></div>
                <div class='card-title'>Чіткі <span> Знімки</span></div>
                <div class='card-desc'>Рентгеновське обстеження дозволить отримати чіткий знімок внутрішніх органів та кісток та виявити проблему.</div>
            </div>

            <div class='card'>
                <div class='card-image'><img class='card-img' src='img/card3.png'></div>
                <div class='card-title'>Виявлення <span> Проблем</span></div>
                <div class='card-desc'>Травматологи надають допомогу при переломах, розтягненнях, розривах та травмах опорно-рухового апарату.</div>
            </div>

        </div>
    </div>
</div>

<div class="news">
    <div class="container">
        <h2>Останні новини</h2>
        <div class="news-items">

            <div class="news-item">
                <h3>Нова послуга: Телемедицина</h3>
                <p>Тепер ви можете отримати консультацію з лікарем онлайн, не виходячи з дому. Використовуйте зручність та швидкість телемедицини!</p>
            </div>

            <div class="news-item">
                <h3>Запрошуємо на безкоштовний медичний огляд</h3>
                <p>У нашому медичному центрі стартує акція "День здоров'я". Приходьте на безкоштовний медичний огляд та отримайте консультацію фахівця!</p>
            </div>

            <div class="news-item">
                <h3>Важлива інформація для пацієнтів</h3>
                <p>Повідомляємо, що у зв'язку з ремонтними роботами в медичному центрі буде тимчасово призупинено роботу стоматологічного кабінету. Дякуємо за розуміння!</p>
            </div>
            
            <div class="news-item">
                <h3>Зміни в графіку роботи медичного центру</h3>
                <p>Повідомляємо про зміну графіку роботи медичного центру з 1 лютого. Будемо працювати з понеділка по п'ятницю з 8:00 до 17:00. Звертайтеся за консультацією та записом на прийом за новим графіком!</p>
            </div>

        </div>
    </div>
</div>

<div class='history'>
    <div class='container'>
        <div class='history-holder'>
            <div class='history-info'>

                <div class='history-title'>Наша <span> Історія</span></div>

                <div class='history-desc'>
                    Запрошуємо вас на захопливу подорож у минуле! Наш медичний центр сповнений історії, що налічує понад 50 років досвіду в наданні якісної медичної допомоги. Відкрийте для себе наші корені та переконайтеся у нашій відданості вашому здоров'ю!
                </div>

                <div class='history-number'>
                    <div class='number-item'>93 <span> Фармакології</span></div>
                    <div class='number-item'>206 <span> Видів лікування</span></div>
                    <div class='number-item'>1000+<span> задоволених пацієнтів</span></div>
                </div>

            </div>

            <div class='history-images'>
                <img class='imgages-1' src="img/1.jpg" alt="">
                <img class='imgages-2' src="img/2.jpg" alt="">
                <img class='imgages-3' src="img/3.jpg" alt="">
            </div>

        </div>

    </div>
</div>


</body>
</html>
