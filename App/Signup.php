<?php
require_once('../Home/Header.php');
require_once('../Settings/Connection.php');
include('Auth.php');

session_start();


// if the user is alreay signed in, redirect them to the members_page.php page
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) header('location: index.php');

// use the following guidelines to create the function in auth.php
// instead of using "die", return a message that can be printed in the HTML page
if (count($_POST) > 0) {
  // check if the email is valid
  // if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');

  // check if password length is between 8 and 16 characters
  // if (strlen($_POST['password']) < 8) die('Please enter a password >=8 characters');

  // check if the password contains at least 2 special characters
  // check if the file containing banned users exists
  // check if the email has not been banned
  // check if the file containing users exists
  // check if the email is in the database already
  // encrypt password
  // save the user in the database 
  // show them a success message and redirect them to the sign in page

  $firstName = trim($_POST['firstName']);
  $lastName = trim($_POST['lastName']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $phone = trim($_POST['phone']);
  $role = 5;

  signup($connection, $firstName, $lastName, $email, $password, $phone, $role);

  header("location: Signin.php");
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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST">

                  <div class="row">
                    <div class="col-md-6">

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input name="firstName" type="text" id="form3Example1c" class="form-control" required />
                          <label class="form-label" for="form3Example1c">First Name</label>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6">

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input name="lastName" type="text" id="form3Example1c" class="form-control" required />
                          <label class="form-label" for="form3Example1c">Last Name</label>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input name="email" type="email" id="form3Example3c" class="form-control" placeholder="abc@gmail.com" required />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input name="password" type="password" id="form3Example4c" class="form-control" required />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" required />
                        <label class="form-label" for="form3Example4cd">Confirm password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input name="phone" type="password" id="form3Example4cd" class="form-control" required />
                        <label class="form-label" for="form3Example4cd">Phone</label>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <p class="form-check-label" for="form2Example3">
                        Already have an account? <a href="Signin.php">Sign in</a>
                      </p>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://images.unsplash.com/photo-1642509949167-67139eb1b37b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHNpZ24lMjB1cCUyMGZvb2R8ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60" class="img-fluid" alt="Sample image">

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