<link rel="stylesheet" href="navigation.css">
<?php $page = $_SERVER['PHP_SELF']; ?>


<nav class="menu">
<ul>
    <li class="<?php if($page=='accueil'){echo 'active';}?>"><A HREF="vitrine-accueil.php">ACCUEIL</A> 
    <li class="<?php if($page=='programme'){echo 'active';}?>"><A HREF="vitrine-programme.php">PROGRAMME</A> 
    <li class="<?php if($page=='contact'){echo 'active';}?>"><A HREF="vitrine-contacts.php">CONTACT</A> 
</ul>
</nav>
