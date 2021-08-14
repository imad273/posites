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
    <link rel="stylesheet" href="css/new.css">
    <title>Add Post</title>
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

    <?php
        require "confi.php";
        if(isset($_POST['send'])){
            
            $title = $_POST['title'];
            $content = $_POST['content'];
            if(empty($_POST['title']) &&  empty($_POST['content'])){ ?>
                <div class="succs" style="background-color: rgb(255, 23, 23); color: #fff;">
                    <?php echo "Please type semthings" ?>
                </div>
            <?php } 
            
            else{
                $sql = "INSERT INTO posts (title, content) VALUE ('$title', '$content')";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                if($sql){ ?>
                    <div class="succs">
                        <?php echo "Post Published";?>
                    </div>
        <?php 
                }
            }
        }
    ?>

    <form method="POST">
        <h2>Add Post</h2>
        <input type="text" placeholder="Title" name="title">
        <textarea cols="30" rows="10" placeholder="Content" name="content"></textarea>
        <button type="submit" name="send">Post</button>
    </form>

    <script src="js/main.js"></script>
</body>
</html>