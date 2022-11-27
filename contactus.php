<!-- Header started here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header ended here -->


<section class="ifh-h-sec1 index-sec-padd1">
  <div class="container">
    <div class="row">
      <!-- left side -->
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <div class="well-box">
              <p>Please fill out the form below and we will get back to you as soon as possible.</p>
              <form id="contactus-frm" method="post">
                <div class="form-group">
                  <label class="control-label" for="name">Full Name
                    <span class="required">*</span>
                  </label>
                  <input id="name" name="name" type="text" placeholder="Full  Name" class="form-control input-md" required="">
                </div>
                <div class="form-group">
                  <label class=" control-label" for="email">E-Mail
                    <span class="required">*</span>
                  </label>
                  <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required="">
                </div>
                <div class="form-group">
                  <label class=" control-label" for="mobile_no">Phone
                    <span class="required">*</span>
                  </label>
                  <input id="mobile_no" name="mobile_no" type="text" placeholder="Phone" class="form-control input-md" required="">
                </div>
                <div class="form-group">
                  <label class="  control-label" for="description">Message
                    <span class="required">*</span>
                  </label>
                  <textarea class="form-control" rows="4" id="description" name="description" placeholder="Write Your Message" required=""></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn contact-submit-btn">Submit</button>
                </div>
              </form>
              <h5 style="display: none;color: green;margin-top: 5px;" id="successText">Your Query successfully submitted.</h5>
              <h5 style="display: none;color: red;margin-top: 5px;" id="errorText">There is some error in submitting, please try again later.</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- right side -->
      <div class="col-md-6 contact-info">
        <div class="row">
          <div class="col-md-12">
            <div class="well-box">
              <ul class="listnone">
                <li class="address">
                  <h2>
                    <i class="fas fa-map-marker-alt"></i>Location
                  </h2>
                  <p>1/3,Shere Punjab Colony, Next to gurudwara <br>
                    Off, Mahakali caves road <br>
                    Andheri East. Mumbai 400 093 India.
                  </p>
                </li>
                <li class="email">
                  <h2>
                    <i class="fa fa-envelope"></i>E-Mail
                  </h2>
                  <p>info@indianfilmhistory.com</p>
                </li>
                <li class="call">
                  <h2>
                    <i class="fas fa-phone-alt"></i>Contact
                  </h2>
                  <p>+91 9870337999</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="well-box">
              <h2>Need Help ?</h2>
              <p>Are you an advertiser enquiring about advertising in You &amp; Your Wedding or on weddingvendor?
                Please
                <a href="JavaScript:Void(0);">click here </a>to contact the advertising team.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-g-map">
  <iframe class="address-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5946860562512!2d72.8603513149019!3d19.12542898705951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c82897964229%3A0xde309a910846637a!2sIndian+Film+History!5e0!3m2!1sen!2sin!4v1506680160260" width="100%" height="350" style="border-top: solid 2px #8f8c87;" frameborder="0" allowfullscreen=""></iframe>
</section>


<!-- Footer Start -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer End -->