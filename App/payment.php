<?php
session_start();
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
require_once('../Classes/PaymentClass.php');


if (count($_POST) > 0) {
  $fullName = trim($_POST['fullName']);
  $cardNum = trim($_POST['cardNum']);
  $expiration = trim($_POST['expiration']);
  $securityCode = trim($_POST['securityCode']);
  $userID = $_SESSION['id'];

  echo $userID;
  Payment::createPayment($connection, $fullName, $cardNum, $expiration, $securityCode, $userID);
}
?>

<section class="h-100 gradient-custom-2" style="
background: #fbc2eb;
background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
">
  <section class="p-4 p-md-5" style="
    background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background3.webp);
  ">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-5">
        <div class="card rounded-3">
          <div class="card-body p-4">
            <div class="text-center mb-4">
              <h3>Payment</h3>
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />

            </div>
            <form method="POST">
              <p class="fw-bold mb-4">Add new card:</p>

              <div class="form-outline mb-4">
                <input name="fullName" type="text" id="formControlLgXsd" class="form-control form-control-lg" placeholder="Full Name" />
                <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
              </div>

              <div class="row mb-4">
                <div class="col-7">
                  <div class="form-outline">
                    <input name="cardNum" type="text" id="formControlLgXM" class="form-control form-control-lg" placeholder="1233 1312 2112 1222" />
                    <label class="form-label" for="formControlLgXM">Card Number</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-outline">
                    <input name="expiration" type="text" id="formControlLgExpk" class="form-control form-control-lg" placeholder="MM/YY" />
                    <label class="form-label" for="formControlLgExpk">Expiration Date</label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-outline">
                    <input name="securityCode" type="password" id="formControlLgcvv" class="form-control form-control-lg" placeholder="cvv" />
                    <label class="form-label" for="formControlLgcvv">Cvv</label>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg btn-block">Add card</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<?php
require_once('../Home/Footer.php')
?>