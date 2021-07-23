<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_POST['send'])){
            if(!isset($_POST['title'], $_POST['content'])){
                echo "no";
            } else {
                echo "yes";
            }
        }
    ?>

    <form method="POST">
        <input type="text" placeholder="Title" name="title">
        <textarea cols="30" rows="10" placeholder="Content" name="content"></textarea>
        <button type="submit" name="send">Post</button>
    </form>
</body>
</html>