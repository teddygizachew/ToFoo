<?php
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
require_once('../Classes/PaymentClass.php');
require_once('../Classes/UserClass.php');
require_once('../Classes/AddressClass.php');

$user = User::getUser($connection);

$result = User::getAllUsers($connection);

$payment = Payment::getPayment($connection, $_SESSION['id']);

$address = Address::getAddress($connection, $_SESSION['id']);
?>

<section class="h-100 gradient-custom-2" style="
background: #fbc2eb;
background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-black d-flex flex-row" style="background-image: url('https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8ZHJhd2luZyUyMGZvb2R8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'); height:200px;">
            <div class="ms-3" style="margin-top: 150px;">
              <h5>Welcome, <?= $user['firstName'] ?>!</h5>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $user['firstName'] . ' ' . $user['lastName'] ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $user['email'] ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $user['phone'] ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0">
                          <?= $address['street1'] . ', ' . $address['street2'] . ' ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'] ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
              if ($payment == false) {
              ?>
              <?php
              } else {
              ?>
                <p class="lead fw-normal mb-1">Payment Info</p>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <div class="row d-flex justify-content-center">
                    <div class="card rounded-3">
                      <div class="card-body p-4">
                        <p class="fw-bold mb-4 pb-2">Saved cards:</p>
                        <div class="d-flex flex-row align-items-center mb-4 pb-1">
                          <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                          <div class="flex-fill mx-3">
                            <div class="form-outline">
                              <p type="text" id="formControlLgXc" class="form-control form-control-lg" />
                              <label class="form-label" for="formControlLgXc">**** **** <?= $payment['cardNum'] ?></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <?php
              if ($user['email'] != "admin@tofoo.com") {
              ?>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <div class="row">
                    <div class="card mb-4">
                      <div class="card-body text-center">
                        <div class="d-flex justify-content-center mb-2">
                          <a href="payment.php">
                            <button type="button" class="btn btn-outline-primary ms-1">Add Payment</button>
                          </a>
                          <a href="address.php">
                            <button type="button" class="btn btn-outline-primary ms-1">Add Address</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>

              <?php
              if ($user['email'] == "admin@tofoo.com") {
              ?>
                <p class="lead fw-normal mb-1">Users</p>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <div class="row">
                    <?php
                    while ($user_item = $result->fetch()) {
                    ?>

                      <div class="card mb-4">
                        <div class="card-body text-center">
                          <div class="d-flex flex-row align-items-center">
                            <div class="ms-3">
                              <p>FullName: <?= $user_item['firstName'] . ' ' . $user_item['lastName'] ?></p>
                              <p>Email: <?= $user_item['email'] ?></p>

                            </div>
                          </div>
                          <div class="d-flex justify-content-center mb-2">
                            <a href="deleteUser.php?user_ID=<?= $user_item['ID'] ?>">
                              <button type="button" class="btn btn-outline-danger ms-1">Delete User</button>
                            </a>
                            <a href="modifyUser.php?user_ID=<?= $user_item['ID'] ?>">
                              <button type="button" class="btn btn-outline-warning ms-1">Modify</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once('../Home/Footer.php')
?>