<h3 class="center">Inscription </h3>

<p><?php if(isset($erreur)) echo $erreur ?></p>
    <div class="row">
<!-- manque  la redirection -->
  <form class="col s12" action="#" method="post" >

  <div class="row">
  <div class="input-field col m12 col s12 col l6 ">
    <input placeholder="" name="name" id="name" type="text" class="validate">
    <label for="name">Name</label>
  </div>
  </div>

  <div class="row">
  <div class="input-field col m12 col s12 col l6">
    <input id="last_name" name="lastname" type="text" class="validate">
    <label for="lastname">Last Name</label>
  </div>
  </div>

  <div class="row">
  <div class="input-field col m12 col s12 col l6">
    <input id="password" name="password" type="password" class="validate">
    <label for="password">Password</label>
  </div>
  </div>

  <div class="row">
  <div class="input-field col m12 col s12 col l6">
    <input id="password" name="password2" type="password" class="validate">
    <label for="password">Confirmation Password</label>
  </div>
  </div>


  <div class="row">
  <div class=" input-field col m12 col s12 col l6">

      <input id="email" type="email" name="email" class="validate">
      <label for="email" data-error="wrong" data-success="right">Email</label>

  </div>
  </div>

  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit">Valider
   <i class="material-icons right">send</i>
 </button>
 <a href="destruction.php" class="btn btn-large waves-effect waves-light"> deconnection</a>
</div>
  </form>




 </div>
