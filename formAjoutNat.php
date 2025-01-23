
<?php include "header.php";
?>

<div class="container mt-5">

  <h2 class='pt-3 text-center'>AJOUTER UNE NATIONALITE</h2>
  <form action="valideAjoutNat.php" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded ">
    <div class="form-group">
      <label for='libelle'>libelle</label>
      <input type="text" class='form-control' id='libelle' placehoder='Saisir le libelle' name='libelle'>
    </div>
    <div class="row">
      <div class="col"> <a href="listeNationalites.php" class='btn btn-danger btn-block'>revenir a la liste </a></div>
      <div class="col"><button type='submit' class='btn btn-success btn-block'>ajouter</button> </div>
    </div>
  </form>

</div>


<?php include "footer.php";
?>
