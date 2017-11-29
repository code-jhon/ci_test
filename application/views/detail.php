<div class="card-group">
<div class="col-md-3">
	<div class="card" style="">
	  <img class="card-img-top" src="<?= $image ?>"/>
	  <div class="card-body">
	    <p class="card-text text-center"><?= $game_title ?></p>
	  </div>
	</div>
</div>
<div class="col-md-9"	>
	<div class="card" >
	  <div class="card-header">
	    <strong>Platform:</strong> <?= $platform ?> <strong>Developer:</strong> <?= $developer ?>  <strong>Genre:</strong> <?= $genre ?>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item"></li>
	    <li class="list-group-item text-justify"><?= $review ?></li>
	  </ul>
	</div>
</div>
</div>