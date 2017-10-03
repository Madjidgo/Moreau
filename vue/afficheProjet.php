
<h1>Hello</h1>


<?php

 foreach ($req2 as $key => $value){
$req2['$keys']['admin_id'] = htmlspecialchars(($value['admin_id']));
$req2['$keys']['projet'] = htmlspecialchars(($value['projet']));?>
<h2></h2>

<h4><?php echo $value['dates']; ?></h4>


      <div class="row">
        <div class="col s12 m4 lg6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $value['projet']; ?></span>
              <p>work to realize with the soutein of person by thanking</p>
            </div>
            <div class="card-action">
              <a href="#">tasks secondary</a>
              <form action="controleur/supprime.php" method="post">
       			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
       			<input type="submit" name="" value="Supprimer">
              </form>
              
            </div>
          </div>
        </div>
      </div>

<?php  
}

?>
