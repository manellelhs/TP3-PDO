
<?php include "header.php";
include "connexionPdo.php";
$libelle=$_POST['libelle'];
$req=$monPdo->prepare("insert into nationalite(libelle) value(:libelle)");
$req->bindParam(':libelle',$libelle);
$nb=$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-3">';

if($nb ==1){
    echo '<div class="alert alert-success" role="alert">
    La nationalite a bien ete ajoutée 
    </div>';

}
else{
    echo '<div class="alert alert-danger" role="alert">
    La nationalite n\'a pas ete ajoutée ! 
    </div>';

}
?>

<a href="listeNationalites.php" class="btn btn-primary">revenir a la liste des nationalites</a>

</div>


<?php include "footer.php";
?>
