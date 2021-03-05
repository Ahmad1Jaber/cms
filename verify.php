<?php $title = "Verify Phone Number";
require_once "includes/header.php";
require_once "app/conn.php";

?>

<div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center">
        <img src="assets/abc.png" alt="ABC Logo" width="50%">
             <h1 class="mb-5 font-weight-light text-uppercase">Verify Number</h1> 
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Enter OTP">
            </div>
            <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Verify</button>
            <p class="mt-3 font-weight-normal">Didn't recieve OTP? <a href="#"><strong>Resend</strong></a></p>

        </form>

    </div>

<?php require_once "includes/header.php"; ?>
   