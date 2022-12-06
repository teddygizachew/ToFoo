<?php
session_start();
require_once('Themes/Header.php');
include('Auth/auth.php');

// if the user is alreay signed in, redirect them to the members_page.php page

// use the following guidelines to create the function in auth.php
//instead of using "die", return a message that can be printed in the HTML page
if (count($_POST) > 0) {
  // 1. check if email and password have been submitted
  if (!isset($_POST['email'])) die('please enter your email');
  if (!isset($_POST['password'])) die('please enter your email');
  // 2. check if the email is well formatted
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');
  // 3. check if the password is well formatted
  if (strlen($_POST['password']) < 8) die('Please enter a password >=8 characters');
  // 4. check if the file containing banned users exists

  // 5. check if the email has been banned

  // 6. check if the file containing users exists

  // 7. check if the email is registered
  // 8. check if the password is correct
  // 9. store session information
  // 10. redirect the user to the members_page.php page

  signin();
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
    <button type="submit" class="btn btn-outline-primary">Log in</button>
  </div>
</form>

<script script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
require_once('Themes/Footer.php')
?>