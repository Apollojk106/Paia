<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elden Ring Fan Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://images2.alphacoders.com/103/thumb-1920-1037695.jpg");
            background-size: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: transparent;
            
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: white;
        }
        p {
            color: white;
        }
    </style>
    <?php
    if ($_COOKIE['status'] != "Logado") {
        setcookie("status", "Login incorreto!", time() + (86400));
        header("Location: loginpage.php");
        exit();
    }
    ?>
</head>
<body>
    <div class="container">
        <h1>Elden Ring Fan Page</h1>
        <p>"<?php if (isset($_COOKIE['user'])){echo $_COOKIE['user'];} else{echo 'Maculado';}?>" Explore the mystical world of Elden Ring, a dark fantasy action RPG developed by FromSoftware. Uncover ancient secrets, battle fearsome creatures, and forge your destiny as an Elden Lord.</p>
        <p>Release Date: February 25, 2022</p>
        <p>Genres: RPG</p>
        <p>Developer: FromSoftware, Inc.</p>
        <p>Join the Golden Order and embark on an epic quest in the Lands Between!</p>
        <p><a href="https://en.bandainamcoent.eu/elden-ring/elden-ring" target="_blank">Official Website</a></p>
    </div>
</body>
</html>