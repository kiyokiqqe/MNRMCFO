<?php
//підключення до бд
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // коментар з форми
    $comment = $_POST['comment'];
    
    //вставка коментаря в бд
    $insert_query = "INSERT INTO comments (comment_text) VALUES ('$comment')";
    
    if (mysqli_query($conn, $insert_query)) {
        // на сторінку welcome.php після додавання коментаря
        header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
}
?>
