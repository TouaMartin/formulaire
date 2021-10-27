<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion</title>
</head>
<body class="menu">
    <div  id="container">
        <!-- zone de connexion -->
        
        <form action="verification.php" method="POST">
            <h1>Connexion</h1>
            
            <p><label><b>Email</b></label>
                <input type="text" placeholder="Entrer Email" name="usermail" required>
            </p>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <p>
                <input type="submit" id='submit' value='Se Connecter' >
                <a href="inscription.html">S'inscrire</a>
            </p>
            
            
        </form>
    </div>

</body>
</html>