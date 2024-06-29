<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login_form.php");
    exit();
}

$user = $_SESSION['user'];

//підключення до бд
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Vidiilenna"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, description FROM Viddilenna";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href='css/stylesserlocallwelcomee.css'> 
    <!-- <link rel='stylesheet' type="text/css" href='css/styles_i_.css'>  -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta charset="UTF-8">
    <title>Відділення</title>
    <link rel='stylesheet' type="text/css" href='css/styleforviddilenna.css'>

    <style>
        .details { display: none; }
    </style>
</head>
<body>
    <div class='header'>
        <div class='container'>
            <div class='header-line'>
                <div class='header-logo'><img src="img/logo.png" alt=""></div>
                <div class='nav'>
                    <a class='nav-item' href="welcome.php">Головна</a>
                    <a class='nav-item' href="viddilenna.php" id="departments">Відділення</a>
                    <a class='nav-item' href="services.php" id="services">Послуги</a>
                    <a class='nav-item' href="about.php" id="about">Про нас</a>
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

            <div class='container-V'>
                <h1>Відділення</h1>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Назва відділення</th>
                            <th>Детальніше</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td><a href='#' class='show-details'>Деталі</a></td>";
                                echo "</tr>";
                                echo "<tr class='details'>";
                                echo "<td colspan='2' class='details-content'><p>" . htmlspecialchars($row['description']) . "</p></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>Немає даних</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
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
                $("#services-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();/*
            } else if ($(this).attr("id") === "payment") {
                $("#payment-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();*/
            } else if ($(this).attr("id") === "welcome") {
                $("#about-dropdown").css({ top: $(this).position().top + $(this).outerHeight(), left: $(this).position().left }).show();
            }
        },
        function() {
            if ($(this).attr("id") === "departments") {
                $("#departments-dropdown").hide();
            } else if ($(this).attr("id") === "services") {
                $("#services-dropdown").hide();/*
            } else if ($(this).attr("id") === "payment") {
                $("#payment-dropdown").hide();*/
            } else if ($(this).attr("id") === "welcome") {
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

            $("#departments").click(function(event) {
                event.preventDefault();
                window.location.href = "viddilenna.php";
            });

            $("#services").click(function(event) {
                event.preventDefault();
                window.location.href = "services.php";
            });

            $("#payment").click(function(event) {
                event.preventDefault();
                window.location.href = "payment.php";
            });

            $("#about").click(function(event) {
                event.preventDefault();
                window.location.href = "about.php";
            });
        });
    </script>
</body>
</html>
