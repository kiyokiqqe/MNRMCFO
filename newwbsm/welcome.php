<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login_form.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ласкаво просимо</title>
    <link rel='stylesheet' type="text/css" href='css/styles_i_.css'>
    <link rel='stylesheet' type="text/css" href='css/stylesserlocallwelcomee.css'>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <div class='header'>
        <div class='container'>
            <div class='header-line'>
                <div class='header-logo'><img src="img/logo.png" alt=""></div>
                <div class='nav'>
                    <a class='nav-item' href="welcome.php">Головна</a>
                    <a class='nav-item' href="" id="departments">Відділення</a>
                    <select class="nav-item-dropdown" id="departments-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Хірургічне</option>
                        <option>Кардіологічне</option>
                        <option>Травматологічне</option>
                    </select>
                    <a class='nav-item' href="" id="services">Послуги</a>
                    <select class="nav-item-dropdown" id="services-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Консультація</option>
                        <option>Обстеження</option>
                        <option>Лікування</option>
                    </select>
                    <a class='nav-item' href="" id="payment">Оплата</a>
                    <select class="nav-item-dropdown" id="payment-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Готівка</option>
                        <option>Кредитна карта</option>
                        <option>Онлайн платежі</option>
                    </select>
                    <a class='nav-item' href="" id="questions">Питання</a>
                    <select class="nav-item-dropdown" id="questions-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Загальні питання</option>
                        <option>Медичні питання</option>
                        <option>Фінансові питання</option>
                    </select>
                    <a class='nav-item' href="" id="about">Про нас</a>
                    <select class="nav-item-dropdown" id="about-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Наша історія</option>
                        <option>Наша команда</option>
                        <option>Контакти</option>
                    </select>
                </div>
                
                <div class='mesages'>
                    <a href="#"><img class='mesages-img' src="img/mesages.png" alt=""></a>
                </div>
                <div class='phone'>
                    <div class='phone-holder'>
                        <div class='phone-img'><img src="img/phone.png" alt=""></div>
                        <div class='number'><a class='num' href='https://www.instagram.com/qw_of_xxe/'>+380-984-557-395</a></div>
                    </div>
                    <div class='phone-text'>Зв'яжіться для консультації</div>
                </div>
                <div class='btn'><a class='button' href='#'>Запис на прийом</a></div>
            </div>

            <h1>Ласкаво просимо, <?php echo htmlspecialchars($user['login']); ?>!</h1>
            <p>Ваш email: <?php echo htmlspecialchars($user['email']); ?></p>
            <a href="logout.php">Вийти</a>

            <!-- форма для коментарів -->
            <form id="commentForm" action="add_comment.php" method="post">
                <textarea name="comment" rows="4" cols="30" placeholder="Введіть свій коментар "></textarea><br><br>
                <button type="submit">Додати</button>
            </form>

            <h2>Коментарі:</h2>
            <div id="comments">
                <?php include 'get_comments.php'; ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".nav-item").hover(
                function() {
                    if ($(this).attr("id") === "departments") {
                        $("#departments-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    } else if ($(this).attr("id") === "services") {
                        $("#services-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    } else if ($(this).attr("id") === "payment") {
                        $("#payment-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    } else if ($(this).attr("id") === "questions") {
                        $("#questions-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    } else if ($(this).attr("id") === "about") {
                        $("#about-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    }
                },
                function() {
                    if ($(this).attr("id") === "departments") {
                        $("#departments-dropdown").hide();
                    } else if ($(this).attr("id") === "services") {
                        $("#services-dropdown").hide();
                    } else if ($(this).attr("id") === "payment") {
                        $("#payment-dropdown").hide();
                    } else if ($(this).attr("id") === "questions") {
                        $("#questions-dropdown").hide();
                    } else if ($(this).attr("id") === "about") {
                        $("#about-dropdown").hide();
                    }
                }
            );

            $(".nav-item-dropdown").hover(
                function() {
                    $(this).show();
                },
                function() {
                    $(this).hide();
                }
            );
        });
    </script>
</body>
</html>
