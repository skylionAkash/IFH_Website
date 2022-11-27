<!-- Header started here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<!-- Header ended here -->
<section class="register-form-section">
  <div class="container">
    <div class="row register-form-row">
      <!-- left side graphics -->
      <div class="col-md-6 login-col-left-0">
        <div class="left-graphics-div">
          <img src="images/banner/Login_page_graphics.jpg" alt="">
        </div>
      </div>
      <!-- right side form -->
      <div class="col-md-6 login-col-left-0">
        <div class="register-form-div">
          <h4 class="register-title text-danger mb-3">Welcome Back! <span class="login-span">(Login Here)</span></h4>
          <div class="login-page-tab-btn">
            <ul>
              <li><a class="login-form-change active" href="#using-email-login" data-show=".using-email-login">Login Using Email</a></li>
              <li><a class="login-form-change" href="#using-otp-login" data-show=".using-otp-login">Login Using OTP</a></li>
            </ul>
          </div>
          <section>
            <div class="row">
              <div class="col-md-12">
                <div class="using-email-login">
                  <form action="">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="name" class="control-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter  Username" name="" id="" required="">
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="name" class="control-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter  Username" name="" id="" required="">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="recaptcha-div">
                      </div>
                    </div>
                    <div class="col-md-12 mt-3">
                      <button type="submit" class="btn btn-danger">Login</button>
                      <a class="btn btn-danger-outline">Forget Password</a>
                    </div>
                    <div class="col-md-12">
                      <p class="create-new-acc-link">Not Registered? <a href="register">Create New Account</a></p>
                    </div>
                  </form>
                </div>
                <div class="using-otp-login hide">
                  <form action="">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="name" class="control-label">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="" id="" required="">
                      </div>
                      <div class="col-md-12">
                        <div class="recaptcha-div">
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-danger">Login</button>
                        <a class="btn btn-danger-outline">Forget Password</a>
                      </div>
                      <div class="col-md-12">
                        <p class="create-new-acc-link">Not Registered? <a href="register">Forget Password</a></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // training text change
  $(document).on('click', '.login-form-change', function() {
    var show = $(this).data('show');
    alert('hii');
    $(show).removeClass("hide").siblings().addClass("hide");
  });

  // for active tab
  var selector = '.login-form-change';
  $(selector).on('click', function() {
    $(selector).removeClass('active');
    alert('hinoi');
    $(this).addClass('active');
  });
</script>

<!-- Footer Start -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer End -->