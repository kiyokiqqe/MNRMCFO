<?php
//підключення до бд
require_once('db.php');

$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

// вивід коментарів
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='comment'>" . $row['comment_text'] . "</div>";
    }
} else {
    echo "Немає коментарів :(";
}

//закрити зєднання з бд
mysqli_close($conn);
?>
