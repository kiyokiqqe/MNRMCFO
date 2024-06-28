<!DOCTYPE html>
<html lang="uk">
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
                <a class='nav-item' href="">Оплата</a>
                <a class='nav-item' href="">Питання</a>
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

        </div>

        <div class='header-down'>
            <div class='header-title'>Ласкаво просимо до

                <div class='header-subtitle'>Нашого сайту</div>

                <div class='header-suptitle'>здоров'я найцінніше</div>

                <div class='header-bth'>
                    <a href='#' class='header-button' id='header-button-pos'>Особистий кабінет</a>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="formsContainer" class="history-form" style="display:none;">
    <div id="loginForm">
        <form action="login.php" method="post">
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="password" name="pass">
            <button type="submit">Вхід</button>
        </form>
        <p>Немає акаунта? <a href="#" id="showRegisterForm">Реєстрація</a></p>
    </div>

    <div id="registerForm" style="display:none;">
        <form action="register.php" method="post">
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="password" name="pass">
            <input type="password" placeholder="repeat password" name="repeatpass">
            <input type="text" placeholder="email" name="email">
            <button type="submit">Реєстрація</button>
        </form>
        <p>Вже маєте акаунт? <a href="#" id="showLoginForm">Вхід</a></p>
    </div>
</div>

<script>
$(document).ready(function(){
    // приховати форми при завантаженні сторінки
    $('#formsContainer').hide();
    $('#registerForm').hide();

    // обробка кліку на "Особистий кабінет"
    $('#header-button-pos').click(function(e){
        e.preventDefault(); // запобігає переходу по посиланню
        // чи вже видимий контейнер з формами
        if($('#formsContainer').is(':visible')){
            // так, то приховати його
            $('#formsContainer').hide();
        } else {
            // ні, то показати його з формою входу
            $('#formsContainer').show();
            $('#loginForm').show();
            $('#registerForm').hide();
        }
    });

    // показати форму реєстрації
    $('#showRegisterForm').click(function(e){
        e.preventDefault(); // запобігає переходу по посиланню
        $('#loginForm').hide();
        $('#registerForm').show();
    });

    // показати форму входу
    $('#showLoginForm').click(function(e){
        e.preventDefault(); // запобігає переходу по посиланню
        $('#registerForm').hide();
        $('#loginForm').show();
    });
});
</script>

</body>
</html>
