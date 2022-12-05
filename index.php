<?php
session_start();
require_once('Themes/Header.php');
require_once('settings.php');
// Simple query
$result=$connection->query('
	SELECT restaurant.ID,restaurant.Name AS name_count 
	FROM restaurant
	GROUP BY restaurant.ID');
?>
<?php
require_once('Themes/Body.php');
while($restaurant=$result->fetch()){
echo '<div class="row row-cols-3">
	<div class="col">
		<div class="card" style="width: 18rem;">
 			<img class="card-img-top" src="..." alt="Card image">
  				<div class="card-body">
    				<h5 class="card-title">Restaurant</h5>
    				<p class="card-text">Restaurant Description</p>
    				<a href="#" style="background-color:lightcoral" class="btn btn-outline-light">View</a>
  				</div>
		</div>
	</div>
</div>';
}
?>
</div>

<?php
	require_once('Themes/Footer.php')
?>

