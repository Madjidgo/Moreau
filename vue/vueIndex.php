<h3 class="center">Login </h3>
    <div class="row">

  <form class="col s12" action="controleur/verifConnection.php" method="post" >

  <div class="row">
  <div class="input-field col m12 col s12 col l6 ">
    <input placeholder="Name" name="name" type="text" class="validate">

  </div>
  </div>


  <div class="row">
  <div class="input-field col m12 col s12 col l6">
    <input id="password" name="password" type="password" class="validate" placeholder="password">

  </div>
  </div>
              <div class="row">
                  <div class="col m12 col s12 col l6">
                      <p>
                          <input type="checkbox" id="remember">
                          <label for="remember">Remember me</label>
                      </p>
                  </div>
              </div>

              <div class="divider" class="col m12 col s12 col l6"></div>
              <div class="row">
                  <div class="col m12 col s12 col l6">
                      <p class="right-align">
                          <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Login</button>
                        <a href="index.php?section=connexions" class="btn btn-large waves-effect waves-light"> Inscription</a>
                      </p>
                  </div>
              </div>
          </form>
      </div>
