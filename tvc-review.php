<!-- Header Stared Here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header Ended Here -->


<section class="ifh-Ad_a-sec1 sec-padd">
  <div class="container-fluid">
    <div class="row">
      <!-- left section -->
      <!-- top breadcomb -->
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <div class="btn-group btn-breadcrumb breadcrumb-default">
              <a href="index" class="btn btn-default">
                <i class="fas fa-home"></i>
              </a>
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; AD World </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Press </a>
            </div>
          </div>
        </div>

        <!-- middle part -->
        <!-- Search part -->

        <!-- Content -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="upcoming-box video-row news-grid">
              <!-- <div class="news-video-section"> -->
              <div class="col-md-12">
                <div class="card blog-comment-card">
                  <p>Welcome </p>
                  <p>You can write your reviews on this content. this is solely your personnel review we or our any of employee is not responsible for this or not influenced in any way.</p>
                  <br>
                  <h3 class="card-header">Your Review</h3>
                  <div class="card-body">
                    <form method="post" enctype="multipart/form-data" id="movieReview-frm">

                      <input type="hidden" value="" name="name" placeholder="Name">
                      <input type="hidden" value="" name="contact_no">
                      <input type="hidden" value="2021-12-21 17:29:35" name="review_date">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label for="profile_pic">Profile Photo</label>
                            <input type="file" name="profile_pic" class="form-control" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label for="review">Comment / Review</label>
                            <textarea name="review" id="comments" class="form-control" rows="5" required=""></textarea>
                            <input type="hidden" name="slug" value="pushpa-the-rise">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label for="contact_no">Contact Number</label>
                              <input type="number" name="contact_no" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label for="review">Rate Movie</label>
                              <div class="rate rating-stars">
                                <ul id="stars">
                                  <li class="star" title="Poor" data-value="1">
                                    <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                                  </li>
                                  <li class="star" title="Fair" data-value="2">
                                    <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                                  </li>
                                  <li class="star" title="Good" data-value="3">
                                    <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                                  </li>
                                  <li class="star" title="Excellent" data-value="4">
                                    <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                                  </li>
                                  <li class="star" title="WOW!!!" data-value="5">
                                    <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn review-submit-btn btn-info">Submit</button>
                    </form>
                    <h5 style="display: none;color: green;margin-top: 5px;" id="successText">Your Comment will be visible once admin will approve it.</h5>
                    <h5 style="display: none;color: red;margin-top: 5px;" id="errorText">There is some error in posting comment, please try again later.</h5>
                  </div>
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
        <!-- Pagination -->

      </div>

      <!-- right side bar -->
      <?php include('include/right-side-bar.php'); ?>

    </div>
  </div>
</section>


<!-- Footer started here -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer Ended Here -->