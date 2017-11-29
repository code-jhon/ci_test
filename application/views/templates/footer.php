
<div class="col-12" style="margin:0px !important; padding:0px !important;">
	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item clickable" aria-current="page" data-toggle="modal" data-target="#modal_new_game">Add a Game</li>
	    <li class="breadcrumb-item clickable" aria-current="page" data-toggle="modal" data-target="#modal_about"> About</li>
	  </ol>
	</nav>
</div>


<?php
# Building form for the modal
# Fields
$inp_title = array(
	'name' => 'title',
	'placeholder' => 'Type the game title',
	'class' => 'form-control',
	);

$settings_platform = array(
	'name' => 'platform',
	'placeholder' => 'Type the game platform',
	'class' => 'form-control',
	);
$opc_platform = array(
	'false'	=> 'Choose One',
	'PC'	=> 'PC',
	'Nintendo Switch'	=> 'Nintendo Switch',
	'PlayStation'	=> 'PlayStation',
	'Xbox'	=> 'Xbox'
	);

$inp_developer = array(
	'name' => 'developer',
	'placeholder' => 'Type the game developer',
	'class' => 'form-control',
	);
$inp_genre = array(
	'name' => 'genre',
	'placeholder' => 'Type the game genre',
	'class' => 'form-control',
	);
$inp_review = array(
	'name' => 'review',
	'placeholder' => 'Type the game review',
	'class' => 'form-control',
	);
$inp_image = array(
	'name' => 'image',
	'placeholder' => 'Type the url of the game art',
	'class' => 'form-control',
	);

?>
<!-- Modal -->
<div class="modal fade" id="modal_new_game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding a new game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open("home/save_game") ?>
        <div>
        	<div class="form-group">
			    <label>Title</label>
			    <?= form_input($inp_title) ?>
			    <small>Required</small>
			</div>
        	<div class="form-group">
			    <label>Platform</label>
			    <?= form_dropdown('platform', $opc_platform, 'false', $settings_platform) ?>
			    <small>Required</small>
			</div>
        	<div class="form-group">
			    <label>Developer</label>
			    <?= form_input($inp_developer) ?>
			    <small>Required</small>
			</div>
        	<div class="form-group">
			    <label>Genre</label>
			    <?= form_input($inp_genre) ?>
			    <small>Required</small>
			</div>
        	<div class="form-group">
			    <label>Review</label>
			    <?= form_input($inp_review) ?>
			    <small>Required</small>
			</div>
        	<div class="form-group">
			    <label>Image</label>
			    <?= form_input($inp_image) ?>
			    <small>Required</small>
			</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="form_clear()">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Save (Classic)" />
        <button type="button" class="btn btn-primary" onclick="save_movie()">Save (Ajax)</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About this software</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>
      		This software is developed by: <br>
      		Jhon Avila<br>
      		@javilaortiz<br>
      		javilaortiz@gmail.com<br>
      		and powered by Bootstrap 4<br>
      		Using Codeigniter 3 Framework <br>
      		Mysql database engine<br>
      	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="form_clear()">ok</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>