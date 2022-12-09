<?php
session_start();
require_once('Themes/Header.php');
require_once('Settings.php');
// Simple query
$result = $connection->query('SELECT * FROM restaurant');
$categories = $connection->query('SELECT * FROM category');
require_once('Themes/Body.php');
?>

<div class="scrollbar">
	<ul>
		<li>
			<button class="btn-category" data-cat-source="all">
				<div class="category">
					<span class="name">All</span>
				</div>
			</button>
		</li>
		<?php
		while ($cat = $categories->fetch()) {
		?>
			<li>
				<button class="btn-category" data-cat-source="cat-<?= $cat['ID'] ?>">
					<div class="category">
						<span class="name"><?= $cat['name'] ?></span>
					</div>
				</button>
			</li>
		<?php
		}
		?>

		<!-- Add additional list items here -->
	</ul>
</div>

<div class="container py-5">
	<div class="row">
		<?php
		while ($restaurant = $result->fetch()) {
		?>
			<div class="col-md-4 cat-block" id="cat-<?= $restaurant['categoryID'] ?>">
				<div>
					<div class="card">
						<img class="card-img-top" src="#" alt="Card image">
						<div class="card-body">
							<h5 class="card-title"><?= $restaurant['name'] ?></h5>
							<p class="card-text">Location: <?= $restaurant['street1'] . ', ' . $restaurant['street2'] . ', ' . $restaurant["city"] ?></p>
							<p>Category: <?= $restaurant['categoryID'] ?></p>
							<a href="detail.php?restaurant_id=<?= $restaurant['ID']  ?>" style="background-color:lightcoral" class="btn btn-outline-light">View</a>
						</div>
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