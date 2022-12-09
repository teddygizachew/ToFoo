<?php
session_start();
require_once('Themes/Header.php');
require_once('Settings.php');
require_once('Themes/Body.php');
$result=$connection->query('SELECT *
FROM item 
WHERE item.restaurantID =  '.$_GET['restaurant_id']);
?>
<div class="container py-5">
    <div class="row">
    <?php
		while($item=$result->fetch()){
		?>
	<div class="col-md-4">
		<div class="card">
 			<img class="card-img-top" src="#" alt="Card image">
  				<div class="card-body">
    				<h5 class="card-title"><?= $item['name'] ?></h5>
                    <p class="card-text"><?= $item['description']?></p>
                    <p class="card-text"><?= $item['price']?></p>
    				<a href="detail.php?Item_ID=<?= $item['ID']  ?>" style="background-color:lightcoral" class="btn btn-outline-light">Add</a>
  				</div>
		</div>
	</div>
<?php
}
?>
    </div>
</div>
<?php
require_once('Themes/Footer.php');
?>