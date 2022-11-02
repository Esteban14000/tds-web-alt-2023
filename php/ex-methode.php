<h1>Méthode GET </h1>
<a href="?q=Exemple">Exemple de lien avec QueryString</a>
<p> valeur de q passée en POST : </p> 
<h1><?=$_POST['q']??'Aucune'?></h1>
<p><?=$_POST["para"]??''?></p>
<form Methode="post" action="ex-methode.php">
    <input type="texte" name="q" placeholder="Saisir q">
    <textarea name="para" placehodler="Saisir paragraphe"></textarea>
    <button type="submit">Valider </button>
</form>
<?php
