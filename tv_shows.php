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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Television </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;TV Show </a>
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
            <form id="search_frm" method="post">
              <div class="row filter-form">
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left">
                  <label class="control-label"> Language </label>
                  <select id="language" name="language" class="form-control">
                    <option value="">All Languages</option>
                    <option value="">Hindi</option>
                    <option value="">Gujarati</option>
                    <option value="">Tamil</option>
                    <option value="">Bengali</option>
                    <option value="">Marathi</option>
                    <option value="">Bhojpuri</option>
                    <option value="">Kannada</option>
                    <option value="">Punjabi</option>
                    <option value="">Malayalam</option>
                    <option value="">Telugu</option>
                    <option value="">Assamese</option>
                    <option value="">Odia</option>
                    <option value="">Silent</option>
                  </select>
                </div>
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left">
                  <label class="control-label"> Channel </label>
                  <select id="channel" name="channel" class="form-control">
                    <option value="">All Channels</option>
                    <option value="">SAB TV</option>
                    <option value="">Sony</option>
                    <option value="">Star Plus</option>
                    <option value="">Colors</option>
                    <option value="">Zee TV</option>
                    <option value="">&amp;tv</option>
                    <option value="">Big Magic</option>
                    <option value="">Star Bharat</option>
                    <option value="">Colors Marathi</option>
                    <option value="">Zee Marathi</option>
                    <option value="">Zindagi TV</option>
                    <option value="">Star Pravah</option>
                    <option value="">MTV</option>
                    <option value="">Zee Yuva</option>
                    <option value="">DD Sahyadri</option>
                    <option value="">Sony Marathi</option>
                    <option value="">Sony Pal</option>
                    <option value="">Star Utsav</option>
                    <option value="">Zee Anmol</option>
                    <option value="">Bindass</option>
                    <option value="">DD National</option>
                    <option value="">Dangal TV</option>
                    <option value="">Disney Channel</option>
                    <option value="">Life OK</option>
                    <option value="">Imagine TV</option>
                    <option value="">Sahara One</option>
                    <option value="">9X</option>
                    <option value="">NDTV Imagine</option>
                    <option value="">STAR One</option>
                    <option value="">Epic TV</option>
                    <option value="">MH1 Music</option>
                    <option value="">PTC Punjabi</option>
                    <option value="">Sky One</option>
                    <option value="">POGO</option>
                    <option value="">DD Metro</option>
                    <option value="">TV Asia</option>
                    <option value="">ITV</option>
                    <option value="">Zing TV</option>
                    <option value="">UTV Bindass</option>
                    <option value="">National Geographic Channel</option>
                    <option value="">B4U</option>
                    <option value="">Real TV</option>
                    <option value="">Ishara TV</option>
                    <option value="">ETV Marathi</option>
                    <option value="">Netflix</option>
                    <option value="">Hotstar</option>
                    <option value="">HUM TV</option>
                    <option value="">HUM TV</option>
                    <option value="">ABP News</option>
                    <option value="">Saam TV</option>
                    <option value="">E24</option>
                    <option value="">Aaj Tak</option>
                    <option value="">Zoom TV</option>
                    <option value="">Gujarati TV</option>
                    <option value="">Sun Marathi</option>
                  </select>
                </div>
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left2">
                  <label class="control-label"> Type </label>
                  <select id="air_type" name="air_type" class="form-control">
                    <option value="">All</option>
                    <option value="on_air">On Air</option>
                    <option value="off_air">Off Air</option>
                  </select>
                </div>
                <div class="col-md-3 col-12 mob-row-no-pad">
                  <div class="input-group">
                    <input type="text" id="keyword" name="keyword" class="form-control ui-autocomplete-input" placeholder="Search" autocomplete="off">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="button" id="searchkey">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Content -->
        <div class="row listing-page-content">
          <div class="col-md-12">
            <div class="upcoming-news-box">
              <div class="row upcoming-news-box-row-pad">
                <!-- new item -->
                <div class="col-md-3 col-4 upcoming-news-col-pad">
                  <a href="tv-show-details" class="upcoming-news-item">
                    <div class="upcoming-news-bg tv_shows-bg">
                      <img src="images/upcoming-movies/tv-shows.jpeg" alt="">
                      <h2>Aakhri Chaal</h2>
                      <div class="detail-body">
                        <p class="tele-time"><i class="far fa-clock"></i> 6:00 PM - 6:30 PM</p>
                        <p class="tele-day"><i class="far fa-calendar-alt"></i> Mon - Wed</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- new item -->
                <div class="col-md-3 col-4 upcoming-news-col-pad">
                  <a href="tv-show-details" class="upcoming-news-item">
                    <div class="upcoming-news-bg tv_shows-bg">
                      <img src="images/upcoming-movies/tv-shows.jpeg" alt="">
                      <h2>Aakhri Chaal</h2>
                      <div class="detail-body">
                        <p class="tele-time"><i class="far fa-clock"></i> 6:00 PM - 6:30 PM</p>
                        <p class="tele-day"><i class="far fa-calendar-alt"></i> Mon - Wed</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- new item -->
                <div class="col-md-3 col-4 upcoming-news-col-pad">
                  <a href="tv-show-details" class="upcoming-news-item">
                    <div class="upcoming-news-bg tv_shows-bg">
                      <img src="images/upcoming-movies/tv-shows.jpeg" alt="">
                      <h2>Aakhri Chaal</h2>
                      <div class="detail-body">
                        <p class="tele-time"><i class="far fa-clock"></i> 6:00 PM - 6:30 PM</p>
                        <p class="tele-day"><i class="far fa-calendar-alt"></i> Mon - Wed</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- new item -->
                <div class="col-md-3 col-4 upcoming-news-col-pad">
                  <a href="tv-show-details" class="upcoming-news-item">
                    <div class="upcoming-news-bg tv_shows-bg">
                      <img src="images/upcoming-movies/tv-shows.jpeg" alt="">
                      <h2>Aakhri Chaal</h2>
                      <div class="detail-body">
                        <p class="tele-time"><i class="far fa-clock"></i> 6:00 PM - 6:30 PM</p>
                        <p class="tele-day"><i class="far fa-calendar-alt"></i> Mon - Wed</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- new item -->
                <div class="col-md-3 col-4 upcoming-news-col-pad">
                  <a href="tv-show-details" class="upcoming-news-item">
                    <div class="upcoming-news-bg tv_shows-bg">
                      <img src="images/upcoming-movies/tv-shows.jpeg" alt="">
                      <h2>Aakhri Chaal</h2>
                      <div class="detail-body">
                        <p class="tele-time"><i class="far fa-clock"></i> 6:00 PM - 6:30 PM</p>
                        <p class="tele-day"><i class="far fa-calendar-alt"></i> Mon - Wed</p>
                      </div>
                    </div>
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