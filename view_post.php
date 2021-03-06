<?php
    require "confi.php";

    $id = $_GET['id'];
    $qry = $pdo->prepare("SELECT * FROM posts WHERE id = '$id'");
    $qry->execute();
    $ftc = $qry->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/viewPos.css">
    <title>View Post</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">POSITES</a>
        </div>
        <i id="humb" class='bx bx-menu-alt-right'></i>
        <nav id="nav">
            <i id="close" class='bx bx-exit'></i>
            <a href="index.php">Home</a>
            <a href="new_post.php">Add Post</a>
            <a href="about.php">About</a>
        </nav>
    </header>

    <div class="posts">
        <div class="post">
            <h2> <?php echo $ftc['title']; ?></h2>
            <p> <?php echo $ftc['content']; ?></p>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>