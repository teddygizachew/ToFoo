<?php
session_start();
require_once('Themes/Header.php');
include('Auth/auth.php');

// if the user is alreay signed in, redirect them to the members_page.php page
// use the following guidelines to create the function in auth.php
// instead of using "die", return a message that can be printed in the HTML page
if (count($_POST) > 0) {
  // check if the fields are empty
  if (!isset($_POST['email'])) die('please enter your email');
  if (!isset($_POST['password'])) die('please enter your email');

  // check if the email is valid
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');

  // check if password length is between 8 and 16 characters
  if (strlen($_POST['password']) < 8) die('Please enter a password >=8 characters');

  // check if the password contains at least 2 special characters
  // check if the file containing banned users exists
  // check if the email has not been banned
  // check if the file containing users exists
  // check if the email is in the database already
  // encrypt password
  // save the user in the database 
  // show them a success message and redirect them to the sign in page

  signup();
}
?>


<form method="POST" class="center-screen">
  <div class="form-group" style="width: 18rem;">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
  </div>

  <div class="form-group" style="width: 18rem;">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" required>
  </div>

  <div class="add-button-div">
    <button type="submit" class="btn btn-outline-primary">Create account</button>
  </div>
</form>

<script script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
require_once('Themes/Footer.php')
?>