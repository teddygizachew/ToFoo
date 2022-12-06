<?php
session_start();
require_once('Themes/Header.php');
require_once('settings.php');
// Simple query
$result=$connection->query('SELECT * FROM restaurant');
require_once('Themes/Body.php');
?>
<div class="container py-5">
	<div class="row">
		<?php
		while($restaurant=$result->fetch()){
		?>
	<div class="col-md-4">
		<div class="card">
 			<img class="card-img-top" src="#" alt="Card image">
  				<div class="card-body">
    				<h5 class="card-title"><?= $restaurant['Name'] ?></h5>
    				<p class="card-text">Location: <?=$restaurant['Street1'].', '.$restaurant['Street2'].', '.$restaurant["City"]?></p>
    				<a href="detail.php?id=<?= $restaurant['ID']  ?>" style="background-color:lightcoral" class="btn btn-outline-light">View</a>
  				</div>
		</div>
	</div>
<?php
}
?>
</div>
</div>

<?php
	require_once('Themes/Footer.php')
?>

