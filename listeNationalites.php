
<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();

?>


<div class="container mt-5">

<div class="row pt-3">
<div class="col-9"><h2>LISTE DES NATIONALITES</h2></div>
<div class="col-3"><a href="" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>


</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">numero</th>
      <th scope="col">libelle</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($lesNationalites as $nationalite){
    echo"<tr>";
    echo"<td>$nationalite->num</td>";
    echo"<td>$nationalite->libelle</td>";
    echo"<td>
        <a href='' class='btn btn-primary'><i class='fas fa-pen'></i></a>
    </td>
        <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
    </td>";
    echo "</tr>";
    }
    ?>
   

  </tbody>
</table>
 

</div>


<?php include "footer.php";
?>
