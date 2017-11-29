<?php
# Building game cards
$game_cards = '';
foreach ($games as $game_item) {
	# Build a sigle card
	$game_cards .= '
	<div class="card" style="width: 10rem; margin:10px;">
	  <img class="card-img-top" src="'.$game_item["ga_image"].'" alt="'.$game_item["ga_title"].'">
	  <div class="card-body">
	    <p class="card-text"><a href="index.php/game/'.$game_item["ga_id"].'"><strong>'.$game_item["ga_title"].'</strong></a></p>
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

