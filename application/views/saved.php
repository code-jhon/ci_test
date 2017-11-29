<?php
if($response == 1){
	$output = 'The new game was saved successfully!';
}else{
	$output = $response;
}
?>
<?= validation_errors() ?>
<?= $output ?>