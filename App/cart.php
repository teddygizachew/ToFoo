<?php
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
require_once('../Classes/CartClass.php');
require_once('../Classes/PaymentClass.php');

$result = Cart::getCart($connection);

$count = Cart::getCartCount($connection);
$payment = Payment::getPayment($connection, $_SESSION['id']);
$shipping_cost = 20.00;
$total = 0;

?>

<section class="h-100 h-custom" style="background-color: #feebf8;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-lg-7">
                <h5 class="mb-3"><a href="index.php" class="text-body">Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have <?= $count['count'] ?> items in your cart</p>
                  </div>
                </div>
                <?php
                //Landing-page
                $total_count = 0;
                while ($cart = $result->fetch()) {
                  $item = Cart::getItem($connection, $cart['itemID']);
                  $total_count += $item['price'];
                ?>
                  <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div class="ms-3">
                            <h5><?= $item['name'] ?></h5>
                            <p class="small mb-0"><?= $item['description'] ?></p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">1</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$<?= $item['price'] ?></h5>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br />
                <?php
                }
                ?>
              </div>
              <div class="col-lg-5">
                <div class="card text-black rounded-3" style="background-color: lightcoral;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Choose Payment</h5>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Select</option>
                      <option value="1">
                        <?= $payment['fullName'] . ' **** ' . $payment['cardNum'] ?>
                      </option>
                    </select>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Choose Address</h5>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Select</option>
                      <option value="1">
                        <?= $payment['fullName'] . ' **** ' . $payment['cardNum'] ?>
                      </option>
                    </select>
                    <hr class="my-4">
                    
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$<?= $total_count ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$<?= $shipping_cost ?></p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">$<?= $total_count+ $shipping_cost ?></p>
                    </div>

                    <button type="button" class="btn btn-success btn-block btn-lg" style="--mdb-btn-margin-top: 0.5rem;display: block; width: 100%;">
                      <div class="d-flex justify-content-between">
                        <span>$<?= $total_count + $shipping_cost ?></span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once('../Home/Footer.php');
?>