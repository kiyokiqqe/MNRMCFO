<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href='css/stylesserlocallwelcomee.css'>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Welcome Page for Users</title>
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
                    <!-- Add the hidden dropdown menu -->
                    <select class="nav-item-dropdown">
                        <option disabled selected>Виберіть</option>
                        <option>Хірургічне</option>
                        <option>Кардіологічне</option>
                        <option>Травматологічне</option>
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

            <form id="commentForm" action="add_comment.php" method="post">
                <textarea name="comment" rows="4" cols="30" placeholder="Введіть свій коментар "></textarea><br><br>
                <button type="submit">Додати</button>
            </form>

            <h2>Коментарі:</h2>
            <div id="comments">
                <?php include 'get_comments.php'; ?>
            </div>

            <script src="scriptsvwelcome.js"></script>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".nav-item").hover(
                function() {
                    if ($(this).text() === "Відділення") {
                        $(".nav-item-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
                    }
                },
                function() {
                    $(".nav-item-dropdown").hide();
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
