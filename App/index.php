<?php
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
require_once('../Classes/UserClass.php');
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
$user = User::getUser($connection);
}
// Simple query
$result = $connection->query('SELECT * FROM restaurant');
$categories = $connection->query('SELECT * FROM category');

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
	</ul>
</div>

<div class="container py-5">
	<div class="row">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-8">
					<h2 class="display-5">These are some of the restaurants we offer...enjoy :)</h2>
				</div>
			</div>
		</div>
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
							<?php
							if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
							?>
								<a href="detail.php?restaurant_id=<?= $restaurant['ID']  ?>" style="background-color:lightcoral" class="btn btn-outline-light">View</a>
							<?php
							}
							?>

							<?php
						if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
							if ($user['email'] == "admin@tofoo.com") {
							?>
								<a href="deleteRestaurant.php?restaurant_id=<?= $restaurant['ID'] ?>" style="background-color:red" class="btn btn-outline-light">Delete</a>
								</form>
							<?php
							}
						}
							?>

							<?php
							if (!isset($_SESSION['logged'])) {
							?>
								<a href="Signin.php" style="background-color:lightcoral" class="btn btn-outline-light">View</a>
							<?php
							}
							?>
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
require_once('../Home/Footer.php')
?>