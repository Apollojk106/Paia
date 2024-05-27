<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #container {
    display: grid;
    place-items: center;
    justify-content: center;    
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);   
     
    } 
    </style>
</head>
<body style="background: blue; position: absolute; position:absolute; width: 100%; height: 100%;">  
    
        <div id="container">
        
            <form action="login.php" method="POST">
                <?php
                    if (isset($_COOKIE['status']) && $_COOKIE['status'] == "Logado") {                       
                        header("Location: conteudo.php");
                        exit();
                    }
                    if (isset($_COOKIE['status'])) {
                        echo '<p style="color:red;">'.$_COOKIE['status'].'</p>';
                    }
                ?>
                <label for="Usuario">Usuario:</label><br>
                <input type="text" id="Usuario" name="Usuario"><br>
                <label for="Senha">Senha:</label><br>
                <input type="password" id="Senha" name="Senha"><br>
                <button type="submit" style="display: flex; margin: 0 auto;">Logar</button>
            </form>
            <form action="registerpage.php" method="POST">
                <button type="submit" style="display: flex; margin: 0 auto;">Cadastrar</button>
                <?php setcookie("status", "", time() - (86400), "/"); ?>
            </form>
            
        </div>
        
    
</body>
</html>