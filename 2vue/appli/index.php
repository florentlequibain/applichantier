
<?php include ('footer.php'); ?>

<p>CONTENU UU U UU U </p>

<?php
foreach($projets as $projet)
{
?>

<div class="news">
    <h3> <?php echo $projet['nom']; ?> </h3>

    <p> <?php echo $projet['date_chantier']; ?> </p>

</div>

<?php
}
?>

<?php include ('header.php'); ?>
