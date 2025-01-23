
<?php include "header.php";
include "connexionPdo.php";
$num=$_POST['num'];
$libelle=$_POST['libelle'];
$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindParam(':libelle',$libelle);
$req->bindParam(':num',$num);
$nb=$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-3">';

if($nb ==1){
    echo '<div class="alert alert-success" role="alert">
    La nationalite a bien ete modifiée
    </div>';
}
else{
    echo '<div class="alert alert-danger" role="alert">
    La nationalite n\'a pas ete modifiée ! 
    </div>';
}
?>

<a href="listeNationalites.php" class="btn btn-primary">revenir a la liste des nationalites</a>

</div>


<?php include "footer.php";
?>
