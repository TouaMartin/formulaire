<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
    <title>Inscription</title>
</head>
<body class="menu">
    <div  id="container">
        <!-- zone de connexion -->
        
        <form action="php/formulaire.php" method="POST">
            <h1>Inscription</h1>
            
            <p><label><b>Nom</b></label>
                <input type="text" placeholder="Entrer Nom Utilisateur" name="username" >
            </p>
            <p><label><b>Prénoms</b></label>
                <input type="text" placeholder="Entrer Prénoms Utilisateur" name="named" >
            </p>
            <p><label><b>Tél</b></label>
                <input type="text" placeholder="N° de Téléphone" name="userTel" >
            </p>
            <p><label><b>Email</b></label>
                <input type="text" placeholder="Entrer Email" name="mail" >
            </p>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" >
            <p>
                <input type="submit" id='submit' value="S'inscrire" name="soumettre" >
                <a style="color:white" href="connexion.html">connexion</a>
            </p>
            
            
        </form>
    </div>

</body>
</html>