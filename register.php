<?php $title = "Register";
require_once "includes/header.php";
?>

<div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center" action="app/register.inc.php" method="POST">
        <img src="assets/abc.png" alt="ABC Logo" width="50%">
            <!-- <h1 class="mb-5 font-weight-light text-uppercase">Login</h1> -->
           
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="user-name" id="user-name" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="user-email" id="user-email" placeholder="E-mail Address" required>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
                <input type="text" class="form-control rounded-pill form-control-lg" name="first-name" id="first-name" placeholder="First Name" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control rounded-pill form-control-lg" name="last-name" id="last-name" placeholder="Last Name" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-6">
                <input type="password" class="form-control rounded-pill form-control-lg" name="user-pwd" id="user-pwd" placeholder="Password" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="password" class="form-control rounded-pill form-control-lg" name="user-pwdCon" id="user-pwdCon" placeholder="Repeat Password" required>
            </div>
            </div>

            <div class="form-group">
               <input type="tel"  id="phone-number" class="form-control rounded-pill form-control-lg" name="phone-number" placeholder="Phone Numer (e.g +1 (555)-5223)" required>
            </div>

            <button type="submit" id="register-submit" name="register-submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Register</button>
            <p class="mt-3 font-weight-normal">Do you have an account? <a href="index.php"><strong>Login Now</strong></a></p>
        </form>
    </div>

<?php require_once "includes/header.php"; ?>
   