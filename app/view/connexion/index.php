<?php

// check if the variable is setif (!isset($_POST['pseudo']))
{
echo '<body>
<form method="post" action="connexion.php"> 
<fieldset>
<legend>Connexion</legend>
<div>
    <label for="pseudo">Pseudo :</label>
    <input name="pseudo" type="text" id="pseudo" /><br />
    <label for="password">Mot de Passe :</label>
    <input type="password" name="password" id="password" />
</div>
</fieldset>
<div>
    <input type="submit" value="Connexion" />
</div>
</form> 
<a href="<?php echo URL."Register";?>">Pas encore inscrit ? </a> 
</body>';
} else 
{
    $message='';
    if (empty($_POST['pseudo'])||
    empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.Vous devez remplir tous les champs</p><p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    } else //On check le mot de passe
    {
        $query=$db->prepare('SELECT membre_mdp, membre_id,membre_rang, membre_pseudoFROM forum_membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], 
        PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        if ($data['membre_mdp'] == 
        md5($_POST['password'])) // Acces OK !
        {
            $_SESSION['pseudo'] = $data['membre_pseudo']; 
            $_SESSION['level'] = $data['membre_rang']; 
            $_SESSION['id'] = $data['membre_id'];
            $message = '<p>Bienvenue'.$data['membre_pseudo'].',vous êtes maintenant connecté!</p> 
<p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d accueil</p>';
        }
        else // Acces pas OK !
        {
            $message = '<p>Une erreur s\'est produitependant votre identification.<br /> Le mot de passe ou le pseudo entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a>pour revenir à la page précédente<br /><br />Cliquez <a href="./index.php">ici</a>pour revenir à la page d accueil</p>';
        }
        $query->CloseCursor();
    }
    echo $message.'</div></body></html>';
}

?>