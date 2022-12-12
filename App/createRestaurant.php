<?php
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
require_once('../Classes/RestaurantClass.php');

if (count($_POST) > 0) {

  $name = trim($_POST['name']);
  $categoryID = trim($_POST['category']);
  $city = trim($_POST['city']);
  $state = trim($_POST['state']);
  $street1 = trim($_POST['street1']);
  $street2 = trim($_POST['street2']);
  $zip = trim($_POST['zip']);

  Restaurant::createRestaurant($connection, $name, $categoryID, $city, $state, $street1, $street2, $zip);
  header("location: profile.php");
}
?>

<section>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Restaurant</p>

                <form method="POST">
                  <p class="fw-bold mb-4">Add a new restaurant:</p>

                  <div class="form-outline mb-4">
                    <input name="name" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">Name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="street1" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">Street1</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="street2" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">Street2</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="city" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">City</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="category" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">Category ID</label>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="formControlLgXsd">State: </label>
                    <select name="state" id="state">
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="zip" type="text" id="formControlLgXsd" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLgXsd">Zip</label>
                  </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block">Add restaurant</button>
                </form>

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