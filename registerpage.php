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
        
            <form    action="register.php" method="POST">
                <?php
                   
                ?>
                <label for="Usuario">Usuario:</label><br>
                <input type="text" id="Usuario" name="Usuario"><br>
                <label for="Senha">Senha:</label><br>
                <input type="password" id="Senha" name="Senha"><br>
                <label for="Email">Email:</label><br>
                <input type="text" id="Email" name="Email"><br>
                <label for="Nome">Nome:</label><br>
                <input type="text" id="Nome" name="Nome"><br>
                <button type="submit" style="display: flex; margin: 0 auto;">Logar</button>
            </form>
            <form action="loginpage.php" method="POST">
                <button type="submit" style="display: flex; margin: 0 auto;">Voltar</button>
                <
            </form>
            
        </div>
        
    
</body>
</html>