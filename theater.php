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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Movies </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Theater</a>
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
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left">
                  <label class="control-label" for="venuetype"> Language </label>
                  <select id="language" name="language" class="form-control">
                    <option value="">All Languages</option>
                    <option value="5b3ee489afa9b42a700b4adb">Hindi</option>
                    <option value="5b4eeca1b6d6f1d5f0e4442d">Gujarati</option>
                    <option value="5b4eeca1b6d6f1d5f0e44438">Tamil</option>
                    <option value="5b4eeca1b6d6f1d5f0e4443c">Bengali</option>
                    <option value="5bf79fb0e5172719b4c88880">Marathi</option>
                    <option value="5bfbb0f472e22f4c3dcc706e">Bhojpuri</option>
                    <option value="5c1caf554b4f973755484f41">Kannada</option>
                    <option value="5c6d1fb067c3221f7de17d1d">Punjabi</option>
                    <option value="5dd39bfd116160642159edb3">Malayalam</option>
                    <option value="5dd5078b116160642159f6d3">Telugu</option>
                    <option value="5dd7762b116160642159fe65">Assamese</option>
                    <option value="5e1eb574e3600e60b63fc9c5">Odia</option>
                    <option value="5f9032d8b82a636cdfb7c572">Silent</option>
                  </select>
                </div>
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left">
                  <label class="control-label" for="venuetype"> Years </label>
                  <select id="year" name="year" class="form-control">
                    <option> Year </option>
                  </select>
                </div>
                <div class="col-md-3 col-4 movies-no-pad-right mob-row-no-pad-left2">
                  <label class="control-label" for="capacity"> Type </label>
                  <select id="type" name="type" class="form-control">
                    <option value="all">All</option>
                    <option value="upcoming" selected="">Upcoming</option>
                    <option value="top">Top</option>
                    <option value="onfire">Onfire</option>
                    <option value="onair">On Air</option>
                  </select>
                </div>
                <div class="col-md-3 col-12 mob-row-no-pad">
                  <div class="input-group">
                    <input type="text" id="keyword" name="keyword" class="form-control ui-autocomplete-input" placeholder="Search" autocomplete="off">
                    <div class="input-group-btn">
                      <button class="btn btn-default mob-search-btn" type="button" id="searchkey">
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
            <div class="upcoming-movie-box">
              <!-- row-1 -->
              <div class="row movie-row">
                <div class="col-md-6 row movie-internal-row">
                  <div class="col-6">
                    <div class="vendor-box">
                      <div class="vendor-image"><a href="movie-details"> <img src="images/upcoming-movies/1580799128226tq3wgr8zdc.jpeg" alt="Thamizharasan"> </a>
                        <div class="favourite-bg"> <a href="JavaScript:Void(0);" class="">U</a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="vendor-detail">
                      <div class="caption"><a href="movie-details" title="Thamizharasan" class="title">Thamizharasan</a>
                        <div class="release-date">17 Dec 2021&nbsp;&nbsp; <i class="fa fa-history"></i> 2h 0min</div>
                        <div class="main-lead"><a href="">Vijay Anthony</a>, <a href="">Remya Nambeesan</a></div>
                        <div class="row movie-language" style="margin-top:10px; margin-left:-4px; clear:both;">
                          <div class="box"><a href="JavaScript:Void(0);" video-url="" class="tit2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch Trailer </a></div>
                          <div class="box">
                            <a href="action" class="tit2">Tamil </a>
                          </div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Action </a>
                            </a></div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Drama </a>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 row movie-internal-row">
                  <div class="col-6">
                    <div class="vendor-box">
                      <div class="vendor-image"><a href="movie-details"> <img src="images/upcoming-movies/1580799128226tq3wgr8zdc.jpeg" alt="Thamizharasan"> </a>
                        <div class="favourite-bg"> <a href="JavaScript:Void(0);" class="">U</a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="vendor-detail">
                      <div class="caption"><a href="movie-details" title="Thamizharasan" class="title">Thamizharasan</a>
                        <div class="release-date">17 Dec 2021&nbsp;&nbsp; <i class="fa fa-history"></i> 2h 0min</div>
                        <div class="main-lead"><a href="">Vijay Anthony</a>, <a href="">Remya Nambeesan</a></div>
                        <div class="row movie-language" style="margin-top:10px; margin-left:-4px; clear:both;">
                          <div class="box"><a href="JavaScript:Void(0);" video-url="" class="tit2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch Trailer </a></div>
                          <div class="box">
                            <a href="action" class="tit2">Tamil </a>
                          </div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Action </a>
                            </a></div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Drama </a>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- row-2 -->
              <div class="row movie-row">
                <div class="col-md-6 row movie-internal-row">
                  <div class="col-6">
                    <div class="vendor-box">
                      <div class="vendor-image"><a href="movie-details"> <img src="images/upcoming-movies/1580799128226tq3wgr8zdc.jpeg" alt="Thamizharasan"> </a>
                        <div class="favourite-bg"> <a href="JavaScript:Void(0);" class="">U</a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="vendor-detail">
                      <div class="caption"><a href="movie-details" title="Thamizharasan" class="title">Thamizharasan</a>
                        <div class="release-date">17 Dec 2021&nbsp;&nbsp; <i class="fa fa-history"></i> 2h 0min</div>
                        <div class="main-lead"><a href="">Vijay Anthony</a>, <a href="">Remya Nambeesan</a></div>
                        <div class="row movie-language" style="margin-top:10px; margin-left:-4px; clear:both;">
                          <div class="box"><a href="JavaScript:Void(0);" video-url="" class="tit2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch Trailer </a></div>
                          <div class="box">
                            <a href="action" class="tit2">Tamil </a>
                          </div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Action </a>
                            </a></div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Drama </a>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 row movie-internal-row">
                  <div class="col-6">
                    <div class="vendor-box">
                      <div class="vendor-image"><a href="movie-details"> <img src="images/upcoming-movies/1580799128226tq3wgr8zdc.jpeg" alt="Thamizharasan"> </a>
                        <div class="favourite-bg"> <a href="JavaScript:Void(0);" class="">U</a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="vendor-detail">
                      <div class="caption"><a href="movie-details" title="Thamizharasan" class="title">Thamizharasan</a>
                        <div class="release-date">17 Dec 2021&nbsp;&nbsp; <i class="fa fa-history"></i> 2h 0min</div>
                        <div class="main-lead"><a href="">Vijay Anthony</a>, <a href="">Remya Nambeesan</a></div>
                        <div class="row movie-language" style="margin-top:10px; margin-left:-4px; clear:both;">
                          <div class="box"><a href="JavaScript:Void(0);" video-url="" class="tit2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch Trailer </a></div>
                          <div class="box">
                            <a href="action" class="tit2">Tamil </a>
                          </div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Action </a>
                            </a></div>
                          <div class="box"><a href="">
                              <a href="action" class="tit2">Drama </a>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
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