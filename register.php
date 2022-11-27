<!-- Header started here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header ended here -->
<section class="register-form-section">
  <div class="container">
    <div class="row login-form-row">
      <!-- left side graphics -->
      <div class="col-md-4 login-col-left-0">
        <div class="left-graphics-div">
          <img src="images/banner/register-side-graphics.png" alt="">
        </div>
      </div>
      <!-- right side form -->
      <div class="col-md-8 login-col-left-0">
        <div class="register-form-div">
          <h4 class="register-title text-danger">Register Here</h4>
          <p class="register-tagline mb-3"><i>Register to join the community of Indian Films!</i></p>
          <form action="">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">First Name<span style="color: red">*</span></label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" id="name" required="">
              </div>
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">Last Name<span style="color: red">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" id="name" required="">
              </div>
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">E-mail <span style="color: red">*</span></label>
                <input type="text" class="form-control" placeholder="Enter E-mail" name="email" id="email" required="">
              </div>
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">Phone <span style="color: red">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name="phone" id="phone" required="">
              </div>
              <div class="col-md-4 form-group">
                <label for="name" class="control-label">Username <span style="color: red">*</span> </label>
                <input type="text" class="form-control" placeholder="Enter Username Only 5 Letter" name="username" id="username" required="">
              </div>
              <div class="col-md-4 form-group">
                <label for="name" class="control-label">Birth Date <span style="color: red">*</span> </label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label for="name" class="control-label">Gender <span style="color: red">*</span> </label>
                <select type="text" class="form-control" name="state" id="state">
                  <option>Select Gender</option>
                  <option value="">Male</option>
                  <option value="">Female</option>
                  <option value="">Other</option>
                </select>
              </div>

              <div class="col-md-12 form-group">
                <label for="email" class="control-label">Address:</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required="">
              </div>
              <div class="col-md-4 form-group">
                <label for="name" class="control-label">State <span style="color: red">*</span> </label>
                <select type="text" class="form-control" name="state" id="state">
                  <option>Select State</option>
                  <option value="">Maharashtra</option>
                  <option value="">Gujrath</option>
                  <option value="">Delhi</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label for="name" class="control-label">City <span style="color: red">*</span> </label>
                <select type="text" class="form-control" name="state" id="state">
                  <option>Select City</option>
                  <option value="">Mumbai</option>
                  <option value="">Pune</option>
                  <option value="">Aurangabad</option>
                  <option value="">Nagpur</option>
                  <option value="">Ahmedabad</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label for="email" class="control-label">Pin Code:<span style="color: red">*</span></label>
                <input type="number" class="form-control" placeholder="Enter Pin Code" name="pin_code" id="pin_code">
              </div>
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">Password <span style="color: red">*</span> </label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" required="">
              </div>
              <div class="col-md-6 form-group">
                <label for="name" class="control-label">Confirm Password <span style="color: red">*</span> </label>
                <input type="password" class="form-control" placeholder="Enter Password Again" name="password" id="password" required="">
              </div>

              <div class="col-md-12">
                <div class="register-form-btn-div">
                  <button type="submit" class="btn d-btn-submit" id="submitBtn1" disabled="">Register</button>
                </div>
              </div>
              <div class="col-md-12">
                <p class="create-new-acc-link">Already Registered? <a href="login">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Start -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer End -->