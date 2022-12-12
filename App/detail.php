<?php

require_once('../Home/Header.php');
require_once('../Settings/Connection.php');

$result = $connection->query('SELECT * FROM item WHERE item.restaurantID =  ' . $_GET['restaurant_id']);


?>
<div class="container py-5">
    <div class="row">
        <?php
        while ($item = $result->fetch()) {
        ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="#" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['name'] ?></h5>
                        <p class="card-text"><?= $item['description'] ?></p>
                        <p class="card-text">$<?= $item['price'] ?></p>
                        <div class="col-md-4">
                            <label class="form-label">Quantity</label>
                            <select id="item_amount" class="form-select">
                                <option selected>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="container py-5">
    <div class="d-grid gap-2">
        <button class="btn btn-success" type="submit">Add To Cart</button>
        <button class="btn btn-danger">Cancel Order</button>
    </div>
</div>
<?php
require_once('../Home/Footer.php');
?>