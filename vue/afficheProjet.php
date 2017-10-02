
<h1>Hello</h1>


<?php

 foreach ($req2 as $key => $value){
$req2['$keys']['admin_id'] = htmlspecialchars(($value['admin_id']));
$req2['$keys']['projet'] = htmlspecialchars(($value['projet']));?>
<h2></h2>

<h2><?php echo $value['dates']; ?></h2>


      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $value['projet']; ?></span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

<?php  
}

?>
