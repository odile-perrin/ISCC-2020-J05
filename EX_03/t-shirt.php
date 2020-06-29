
<?php
$nom="T-shirt simple";
$couleur="blanc";
$prix="10.50";
$quantité="10";
$nombre="3";
$montant3=$prix*$nombre;
$montant10=$quantité*$prix;
$reste=$quantité-$nombre;
echo "<h3>Le nom du produit est $nom.</h3>";
echo "<h3>Il reste $quantité produit en stock.</h3>";
echo "<h3>Le produit $nom est de couleur $couleur.</h3>";
echo "<h4>Acheter 3 produits couterait $montant3.</h4>";
echo "<h4>Acheter la totalité des produits disponibles coûterait $montant10.</h4>";
echo "<h4>Si 3 produits sont vendus, il en reste $reste.</h4>";
?>

