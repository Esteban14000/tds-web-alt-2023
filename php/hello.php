<ul>
    <li><a href="?message=Hi">En anglais</a></li>
    <li><a href="?message= Salut&qui=à tous">En français</a></li>
    <li><a href="?">Par défaut</a></li>

</ul>
<?php

$message = $_GET["message"]??"Bonjour";
$qui=$_GET['qui']??'Tout le monde !';
$color=$_GET['color']??'black';
$bgcolor=$_GET['bgcolor']??'#ffffff';
$fontSize=$_GET['font-size']??'14px';

?>
<form method="get" action="hello.php">
    <fieldset>
    <input type="text" name="message" value="<?=$message?>"  placeholder="Saisir un message">
    <input type="text" name="qui" value="<?=$qui?>" placeholder="Saisir a qui ?">
    <button type="submit">valider</button>
    </fieldset>
<fieldset>
    <legend>Styles</legend>
        <input type="color" name="color" value="<?=$color?>">
        <input type="color" name="bgcolor" value="<?=$bgcolor?>">
        <input type="number" name ="font-size" min="5" max="120" value="<?=$fontSize?>">
        <button type="submit">valider</button>
</fieldset>
</form>

<h1><?=$message?></h1>
<p style ="color: <?=$color?>;background-color:<?=$bgcolor?>;font-size: <?=$fontSize?>"><?=$qui?></p>