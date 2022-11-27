<!-- Header Stared Here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header Ended Here -->

<style>
  .ytp-expand-pause-overlay .ytp-pause-overlay {
    display: none !important;
  }
</style>
<section class="ifh-Ad_a-sec1 movie-details-section sec-padd">
  <div class="container">
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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Movies </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Shikara</a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Review</a>
            </div>
          </div>
        </div>

        <!-- Content start -->
        <div class="row">
          <div class="col-md-12">
            <div class="upcoming-box">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="review-box">
                  <div class="customer-review">
                    <div class="review-list">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-4">
                          <div class="user-pic"><img class="img-responsive img-circle" src="images/icons/avatar.png" alt="profile"></div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-8 mob-xxs">
                          <div class="panel arrow left">
                            <div class="panel-body">
                              <div class="text-start">
                                <h3> Purnima Udyavar</h3>
                                <div class="comment-date"><i class="fa fa-clock-o"></i> Feb 8, 2020</div>
                                <div class="rating shikara-rating"><span class="badge"><i class="fa fa-star"></i> Not rated yet</span> </div>
                              </div>
                              <div class="review-post">
                                <p>Shikara released on the 7th February 2020, the film is basically a love story of a Hindu Kashmiri during the evacuation of the Hindus from Kashmir. The migration that was forced upon more than 400,00,00 Kashmiri Pandits who had fled from Kashmir Valley is the base of the story line. <br><br>Set against the backdrop of the beautiful valleys of Kashmir, the film depicts the ugly truth of exit of the Kashmir Pandits in what circumstances from their own homeland. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- write review -->
              <div class="col-md-12"><br>
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
                                <ul id='stars'>
                                  <li class='star' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
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
              <!-- write review ended -->
            </div>
          </div>
        </div>
        <!-- Content end -->
      </div>



      <!-- right side bar -->
      <?php include('include/right-side-bar.php'); ?>

    </div>
  </div>
</section>
<script>
  // star scrip started
  $(document).ready(function() {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function() {
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function(e) {
        if (e < onStar) {
          $(this).addClass('hover');
        } else {
          $(this).removeClass('hover');
        }
      });

    }).on('mouseout', function() {
      $(this).parent().children('li.star').each(function(e) {
        $(this).removeClass('hover');
      });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function() {
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');

      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }

      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }

      // JUST RESPONSE (Not needed)
      var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
      var msg = "";
      if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
      } else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
      }
      responseMessage(msg);

    });


  });


  function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
  }
  // star scrip ended
</script>

<!-- Footer started here -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer Ended Here -->