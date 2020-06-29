
<?php
$nom="T-shirt simple";
$couleur="blanc";
$prix="10.50";
$quantité="10";
$nombre="3";
$montant3=$prix*$nombre;;
$montant10=$quantité*$prix;
$reste=$quantité-$nombre;
echo "<h3>Le nom du produit est $nom.</h3>";
echo "<h3>Il reste $quantité produit en stock.</h3>";
echo "<h3>Le produit $nom est de couleur $couleur.</h3>";
echo "<h4>Acheter 3 produits couterait $montant3.</h4>";
echo "<h4>Acheter la totalité des produits disponibles coûterait $montant10.</h4>";
echo "<h4>Si 3 produits sont vendus, il en reste $reste.</h4>";
?>

<?php
$disponible = true;

if ($disponible == true)
{
    echo "<p>Le produit $nom est disponible en ligne.</p>";
}

elseif ($disponible == false)
{
    echo "<p>Le produit $nom n’est malheureusement plus disponible.</p>";
}
?>

<?php
$quantité2 = 5;

if ($quantité2 >= 5)
{
    echo "<p>Il reste $quantité2 produits en magasin.</p>";
}

if (( $quantité2 >= 2) AND $quantité2 < 5)
{
    echo "<p>Il ne reste plus que $quantité2 produits en magasin.</p>";
}

elseif ($quantité2 == 1)
{
    echo "<p>Il ne reste qu’un produit en magasin.</p>";
}

elseif ($quantité2 == 0)
{
    echo "<p>Il ne reste plus de produit en magasin.</p>";
}

?>

<?php


?>


