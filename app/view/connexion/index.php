<?php

// check if member is connected.if (!isset($_POST['pseudo']))
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
<a href="./Register.php">Pas encore inscrit ? </a> 


</body>';

?>