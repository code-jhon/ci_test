<?php
# Building game cards
$game_cards = '';
foreach ($games as $game_item) {
	# Build a sigle card
	$game_cards .= '
	<div class="card" style="width: 10rem; margin:10px;">
	  <img class="card-img-top" src="'.$game_item["ga_image"].'" alt="'.$game_item["ga_title"].'">
	  <div class="card-body">
	    <p class="card-text"><a href="index.php/game/'.$game_item["ga_id"].'">more</a></p>
	  </div>
	</div>
	';
}
?>
<div class="col-12">
	<div class="row">
		<?= $game_cards; ?>
	</div>
</div>


<?php
# Building form for the modal
# Fields
$inp_title = array(
	'name' => 'Title',
	'placeholder' => 'Type the game title',
	'class' => 'form-control',
	);

?>
<!-- Modal -->
<div class="modal fade" id="modal_new_game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding new game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open("save_game") ?>
        <div>
        	<div class="form-group">
			    <label for="title">Title</label>
			    <?= form_input($inp_title) ?>
			</div>
        	<div class="form-group">
			    <label for="platform">Platform</label>
			    <input type="text" class="form-control" id="platform" aria-describedby="" placeholder="Enter game platform">
			</div>
        	<div class="form-group">
			    <label for="developer">Developer</label>
			    <input type="text" class="form-control" id="developer" aria-describedby="" placeholder="Enter game Developer">
			</div>
        	<div class="form-group">
			    <label for="genre">Genre</label>
			    <input type="text" class="form-control" id="genre" aria-describedby="" placeholder="Enter game Genre">
			</div>
        	<div class="form-group">
			    <label for="review">Review</label>
			    <input type="text" class="form-control" id="review" aria-describedby="" placeholder="Enter game Review">
			</div>
        	<div class="form-group">
			    <label for="image">Image</label>
			    <input type="text" class="form-control" id="image" aria-describedby="" placeholder="Enter game Image">
			</div>
        </div>
      <?= form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="form_clear()">Close</button>
        <button type="button" class="btn btn-primary">Save (Classic)</button>
        <button type="button" class="btn btn-primary" onclick="save_movie()">Save (Ajax)</button>
      </div>
    </div>
  </div>
</div>

