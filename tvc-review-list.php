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
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Television Commercial </a>
            </div>
          </div>
        </div>
        <!-- listing page description started -->
        <div class="row">
          <div class="col-md-12">
            <div class="listing-page-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <!-- listing page description ended -->
        <!-- middle part -->
        <!-- Search part -->
        <div class="row search-form-row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- <div class="filter-form"> -->
            <form id="search_frm" method="post">
              <div class="row filter-form">
                <div class="col-md-4 col-4 movies-no-pad-right mob-row-no-pad-left">
                  <label class="control-label" for="venuetype"> All </label>
                  <select id="category" name="category" class="form-control">
                    <option value=""> Category </option>
                    <option value="">telecom &amp; satellite tv</option>
                    <option value="">garments &amp; apparels</option>
                    <option value="">food &amp; beverages</option>
                    <option value="">health and sports</option>
                    <option value="">beauty and hair</option>
                    <option value="">footwear</option>
                    <option value="">home appliance</option>
                    <option value="">insurance</option>
                    <option value="">stationary &amp; tools</option>
                    <option value="">stationary</option>
                    <option value="">jewellery</option>
                    <option value="">electronic device</option>
                    <option value="">search engine</option>
                    <option value="">services</option>
                    <option value="">automobile</option>
                    <option value="">device</option>
                    <option value="">cosmetic</option>
                    <option value="">tourism</option>
                    <option value="">property</option>
                    <option value="">materials</option>
                    <option value="">banking and finance</option>
                    <option value="">entertainment</option>
                    <option value="">fashion</option>
                    <option value="">hotels</option>
                    <option value="">jobs and careers</option>
                    <option value="">pledge and discrimination</option>
                    <option value="">time and date</option>
                    <option value="">marketing</option>
                    <option value="">cleaning agents</option>
                    <option value="">eye care</option>
                  </select>
                </div>

                <div class="col-md-4 hide-in-mob"></div>
                <div class="col-md-4 col-8 float-end mob-row-no-pad-left2">
                  <div class="input-group">
                    <input type="text" id="keyword" name="keyword" class="form-control ui-autocomplete-input" placeholder="Search" autocomplete="off">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="button" id="searchkey">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!-- </div> -->
          </div>
        </div>
        <!-- Content -->
        <div class="row listing-page-content">
          <div class="col-md-12">
            <div class="upcoming-box ad-world-box">
              <div class="row no-margin">
                <!-- item-1 -->
                <div class="box-card col-md-4 col-6 pinside2">
                  <a href="tvc-review" class="ad-w-link">
                    <img src="images/upcoming-movies/Ad-Amitabh.jpg" alt="">
                    <h5>Kalyan Jewellers</h5>
                  </a>
                </div>
                <!-- item-2 -->
                <div class="box-card col-md-4 col-6 pinside2">
                  <a href="tvc-review" class="ad-w-link">
                    <img src="images/upcoming-movies/Ad-Amitabh.jpg" alt="">
                    <h5>Kalyan Jewellers</h5>
                  </a>
                </div>
                <!-- item-3 -->
                <div class="box-card col-md-4 col-6 pinside2">
                  <a href="tvc-review" class="ad-w-link">
                    <img src="images/upcoming-movies/Ad-Amitabh.jpg" alt="">
                    <h5>Kalyan Jewellers</h5>
                  </a>
                </div>
                <!-- item-4 -->
                <div class="box-card col-md-4 col-6 pinside2">
                  <a href="tvc-review" class="ad-w-link">
                    <img src="images/upcoming-movies/Ad-Amitabh.jpg" alt="">
                    <h5>Kalyan Jewellers</h5>
                  </a>
                </div>
                <!-- item-5 -->
                <div class="box-card col-md-4 col-6 pinside2">
                  <a href="tvc-review" class="ad-w-link">
                    <img src="images/upcoming-movies/Ad-Amitabh.jpg" alt="">
                    <h5>Kalyan Jewellers</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="row">
          <div class="col-md-12 Ad_ag_pagination mt-3">
            <ul class="pagination">
              <li class="prev disabled"><a href="javascript:void(0);">«</a></li>
              <li class="active"><a href="javascript:void(0);">1</a></li>
              <li class="next disabled"><a href="javascript:void(0);">»</a></li>
            </ul>
          </div>
        </div>
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