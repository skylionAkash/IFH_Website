<!-- Header started here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header ended here -->

<section class="ifh-dashboard-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="dashboard-tab">
          <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'dash-tab-1')">Profile</button>
            <button class="tablinks" onclick="openCity(event, 'dash-tab-2')">Login Details</button>
            <button class="tablinks" onclick="openCity(event, 'dash-tab-3')">Say Administrator</button>
            <button class="tablinks" onclick="openCity(event, 'dash-tab-4')">Logs</button>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="dashed-tab-content">
          <div id="dash-tab-1" class="tabcontent">
            <h3>User Details</h3>
            <div class="row mt-3">
              <div class="col-md-3">
                <h4>Akash Singh</h4>
                <p>Video Editor</p>
              </div>
              <div class="col-md-3">
                <h4><i class="fa fa-map-marker"></i>Address</h4>
                <p>Vishrantwadi <br>
                  Maharashtra, <br>
                  411115 </p>
              </div>
              <div class="col-md-3">
                <h4><i class="fa fa-envelope"></i>E-Mail</h4>
                <p>abc@example.com</p>
              </div>
              <div class="col-md-3">
                <h4><i class="fa fa-phone-alt"></i>Contact</h4>
                <p>+91-1111111111</p>
              </div>
            </div>
          </div>

          <div id="dash-tab-2" class="tabcontent">
            <h3>User Details</h3>
            <form action="" class="mt-3">
              <!-- old Password -->
              <div class="form-group">
                <label class="control-label" for="password">Current Password<span class="required">*</span></label>
                <input id="" name="current_pwd" type="text" placeholder="Current Password" class="form-control" required="">
              </div>
              <!-- New Password -->
              <div class="form-group">
                <label class="control-label" for="password">New Password<span class="required">*</span></label>
                <input id="" name="new_pwd" type="text" placeholder="New Password" class="form-control" required="">
              </div>
              <!-- Confirm New Password -->
              <div class="form-group">
                <label class="control-label" for="password">Confirm New Password<span class="required">*</span></label>
                <input id="" name="new_pwd" type="text" placeholder="Confirm New Password" class="form-control" required="">
              </div>
              <!-- Submit Button -->
              <div class="form-group">
                <button type="button" id="" class="btn submit-btn">Submit</button>
              </div>

            </form>
          </div>

          <div id="dash-tab-3" class="tabcontent">
            <h3>Say Administrator</h3>
            <form action="" class="mt-3">
              <!-- Subject -->
              <div class="form-group">
                <label class="control-label" for="subject">Subject<span class="required">*</span></label>
                <input id="" name="subject" type="text" placeholder="Enter Subject" class="form-control" required="">
              </div>
              <!-- Text -->
              <div class="form-group">
                <label class="control-label" for="subject">Text<span class="required">*</span></label>
                <input id="" name="subject" type="text" placeholder="Enter Text Feedback" class="form-control" required="">
              </div>
              <!-- Message -->
              <div class="form-group">
                <label class="control-label" for="subject">Message<span class="required">*</span></label>
                <textarea type="text" class="form-control" placeholder="Enter Message" name="message" id="message"></textarea>
              </div>
              <!-- Submit Button -->
              <div class="form-group">
                <button type="button" id="" class="btn btn-danger">Close</button>
                <button type="button" id="" class="btn submit-btn">Submit</button>
              </div>
            </form>
          </div>
          <div id="dash-tab-4" class="tabcontent">
            <h3>Logs</h3>
            <div class="row">
              <div class="col-md-12" id=""><br>
                <div>
                  <h3 class="post-title">Your Claim Page</h3>
                  <div class="table-responsive">
                    <table class="table-vertical table-filmography" style="border:0; font-size:12px;">
                      <thead style="background:#c2c2c2;">
                        <tr>
                          <td scope="col">
                            <strong>No.</strong>
                          </td>
                          <td scope="col">
                            <strong>Date</strong>
                          </td>
                          <td scope="col">
                            <strong>Action</strong>
                          </td>
                          <td scope="col">
                            <strong>Claim of Page</strong>
                          </td>
                          <td scope="col">
                            <strong>Link of Page</strong>
                          </td>
                          <td scope="col">
                            <strong>Status</strong>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>25/02/2022 11:21:06</td>
                          <td>Claim Page</td>
                          <td>Manish Bhumar</td>
                          <td><a href="details-actor/jeetendra-thackeray" target="_blank">jeetendra-thackeray</a></td>
                          <td>submitted</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>

</section>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>



<!-- Footer Start -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer End -->