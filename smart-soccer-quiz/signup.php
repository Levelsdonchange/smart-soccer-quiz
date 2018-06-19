<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Create an account</h2>
    <form class="signup-form" action="includes/signup.inc.php" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="First Name" name="first" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="phone" placeholder="Phone Number" name="phone" required />
      <input type="password" placeholder="Password" name="pwd" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="pwdconfirm" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
    </div>

</section> 

<?php
    include_once 'footer.php';
?>    
   