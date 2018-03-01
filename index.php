<?php

  include_once('headers/loginHeader.php');

?>



<div class="p-front__content">
  
<div class="p-signin-a">
  <form action="#" class="p-signin-a__form">
    <h4 class="p-signin-a__form-heading">Sign In</h4>
    <p class="p-signin-a__form-description">
      Hi there! Hope you are having a good day! <br> Please sign in to continue
    </p>
    <div class="form-group">
      <input type="email" class="form-control form-control-lg" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control form-control-lg" placeholder="Password">
    </div>
    <div class="form-group">
      <button class="btn btn-info btn-lg btn-block btn-rounded" type="button">Sign In</button>
    </div>

    <div class="p-signin-a__form-separator"><span>Or</span></div>

    <div class="form-group">
      <button disabled class="btn btn-chambray btn-block iconfont icon-left btn-lg btn-rounded p-signin-a__form-facebook" type="button">
        Sign in with Facebook <span class="btn-icon iconfont iconfont-facebook"></span>
      </button>
    </div>
  </form>

  <div class="p-signin-a__form-link">Already have an account? <a href="signup.html">Sign Up</a></div>
</div>

</div>


<?php

  include_once('headers/loginFooter.php');

?>
