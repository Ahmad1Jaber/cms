<?php $title = "Register";
require_once "includes/header.php";
?>

<div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center">
        <img src="assets/abc.png" alt="ABC Logo" width="50%">
            <!-- <h1 class="mb-5 font-weight-light text-uppercase">Login</h1> -->
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="E-mail Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Last Name">
            </div>

            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password">
            </div>

            <div class="form-group">
               <input type="tel"  id="number" class="form-control rounded-pill form-control-lg" placeholder="Phone Numer (e.g +1 (555)-5223)">
            </div>

            <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Register</button>
            <p class="mt-3 font-weight-normal">Do you have an account? <a href="index.php"><strong>Login Now</strong></a></p>
        </form>
    </div>

<?php require_once "includes/header.php"; ?>
   