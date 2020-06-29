<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/vitrine.css">
    <title>Contact</title>

<body>
<?php $page = 'contact'; include ("header.php");?>
<h2>Contact</h2>
<center>
<form method="POST" action="traitement.php">
    <fieldset>
        <label for="nom">Votre nom</label>
    <div id="nom">
        <input type="text" name="nom" id="nom">
    </div>

    
        <label for="mail">Votre mail</label>
    <div id="mail">
        <input type="text" name="mail" id="mail">
    </div>

        <label for="amelioration">Comment améliorer mon site ?</label>
    <div id="amelioration">
        <textarea id="amelioration"></textarea>
    </div>

    <input type="submit" value="Envoyer">
    </fieldset> 
</center>
</form>

<?php include ("footer.php");?>
</body>

</html>