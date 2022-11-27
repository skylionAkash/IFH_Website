<body onload="loadFunction()">
  <!-- loader started -->
  <div class="loader" id="preloader">
    <div class="loader__filmstrip">
      <div class="loader-center">
        <img src="images/loader/loader-star.png" alt="">
        <!-- <h2>IFH</h2> -->
      </div>
    </div>
  </div>
  <!-- <div id="preloader">
    <div class="loading bar">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div> -->
  <!-- loader ended -->
  <header id="navbar">
    <div class="container-fluid mobile-menu-container">
      <div class="header-top">
        <div class="header-top-left logo">
          <a class="navbar-brand" href="index">
            <img src="images/home/logo/ifh-logo.png" alt="" class="img-responsive logo_resize">
          </a>
        </div>
        <div class="header-top-right">
          <div class="header-side">
            <form class="master_search_frm  form-search" method="post">
              <div class="input-group">
                <input type="text" name="keyword" class="form-control masterKeyword" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-search masterSearchkey" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <div class="">
              <a href="register" class="btn btn-register">REGISTER</a>
              <a href="login" class="btn btn-login">LOGIN</a>
            </div>
          </div>

          <!-- New Mobile Menu on 16-02-22 by Akash started -->
          <nav id='cssmenu'>
            <div class="logo"><a href="index"><img src="images/home/logo/ifh-logo.png" alt="" class="img-responsive logo_resize"> </a></div>
            <div id="head-mobile"></div>
            <!-- user start -->

            <div class="user-btn"><img src="images/icons/avatar.png" alt="User"></div>
            <div class="myText">
              <a href="login">
                <p>Login</p>
              </a>
              <a href="register">
                <p>Register</p>
              </a>
            </div>

            <!-- user end -->
            <div class="button"></div>
            <ul class="ifh-16-02-nav-ul">
              <li><a href='ifh-source'>IFH Source</a>
                <ul class="first-dropdown-ul">
                  <li><a href='producer-client'>Producer/Client</a>
                    <ul>
                      <li><a href='advertising-agency'>Advertising agencies</a></li>
                      <li><a href='event-management-company'>Event Management Company</a></li>
                      <li><a href='production-house'>Production house</a></li>
                      <li><a href='television-producers'>Television producers</a></li>
                      <li><a href='theater-company'>Theater Company</a></li>
                    </ul>
                  </li>
                  <li><a href='talent'>Talent</a>
                    <ul>
                      <li><a href='fashion-designer'>Fashion designer</a></li>
                      <li><a href='fashion-show-directors'>Fashion show directors</a></li>
                      <li><a href='videographers'>Videographer</a></li>
                      <li><a href='writers'>Writers</a></li>
                      <li><a href='casting-director'>Casting Director</a></li>
                    </ul>
                  </li>
                  <li><a href='model-actor'>Model/Actor</a>
                    <ul>
                      <li><a href='models'>Models</a></li>
                      <li><a href='actors'>Actors</a></li>
                    </ul>
                  </li>
                  <li><a href='representative-agencies'>Representative Agencies</a>
                    <ul>
                      <li><a href='casting-agencies'>Casting agencies</a></li>
                      <li><a href='international-agencies'>International agencies</a></li>
                      <li><a href='model-coordinator'>Model coordinator</a></li>
                      <li><a href='modeling-agencies'>Modelling agencies</a></li>
                      <li><a href='publicity-agency'>Publicity Agency</a></li>
                      <li><a href='pr-agency'>PR - Agency</a></li>
                    </ul>
                  </li>
                  <li><a href='serviceproviders'>Service Providers</a>
                    <ul>
                      <li><a href='equipment-provider'>Equipment Provider</a></li>
                      <li><a href='equipment-manufacturer'>Equipment Manufacturer</a></li>
                      <li><a href='shoot-locations'>Shoot Locations</a></li>
                      <li><a href='props-provider'>Props Provider</a></li>
                      <li><a href='photographer'>Photographer</a></li>
                      <li><a href='entertainment-institute'>Entertainment Institute</a></li>
                      <li><a href='film-tourism'>Film Tourism</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href='movies'>Movies</a>
                <ul>
                  <li><a href='upcoming-movies'>Upcoming</a></li>
                  <li><a href='onfire-movies'>Movies on Fire</a></li>
                  <li><a href='top-movies'>Top Rated</a></li>
                  <li><a href='trailer-movies'>Trailer</a></li>
                  <li><a href='all-movies'>All Movies</a></li>
                  <li><a href='shortFilms'>Short Film</a></li>
                  <li><a href='webseries'>Web Series</a></li>
                  <li><a href='theater'>Theater</a></li>
                  <li><a href='boxoffice'>Box office</a></li>
                  <li><a href='critic'>Critic</a></li>
                  <li><a href='awards'>Awards</a></li>
                </ul>
              </li>
              <li><a href='ott'>OTT</a></li>
              <li><a href='celebs'>Celebrities</a>
                <ul>
                  <li><a href='born_today'>Born Today</a></li>
                  <li><a href='popular'>Popular Celebs</a></li>
                  <li><a href='celebrities'>Crews</a></li>
                </ul>
              </li>
              <li><a href='news'>News</a>
                <ul>
                  <li><a href='video'>Video</a></li>
                  <li><a href='article'>Article</a></li>
                </ul>
              </li>
              <li><a href='gallery'>Gallery</a>
                <ul>
                  <li><a href='gallery_photo'>Photos</a></li>
                  <li><a href='gallery_video'>Videos</a></li>
                </ul>
              </li>
              <li><a href='music'>Music</a>
                <ul>
                  <li><a href='music_independent'>Independent Artist</a></li>
                  <li><a href='music_bollywood'>Bollywood</a></li>
                  <li><a href='music_youtube'>Youtube Sensation</a></li>
                  <li><a href='music_classical'>Classical</a></li>
                  <li><a href='music_rockbands'>Rock Bands</a></li>
                  <li><a href='music_bands'>Bands</a></li>
                </ul>
              </li>
              <li><a href='adworld'>Ad World</a>
                <ul>
                  <li><a href='adworld_tvc'>TV Commercial</a></li>
                  <li><a href='adworld_printmedia'>Print Media</a></li>
                  <li><a href='adworld_magazine'>Magazine</a></li>
                  <li><a href='adworld_press'>Press Detail</a></li>
                  <li><a href='tvc-review-list'>TVC Review</a></li>
                </ul>
              </li>
              <li><a href='television'>Television</a>
                <ul>
                  <li><a href='tv_shows'>Show</a></li>
                  <li><a href='tv_realityshow'>Reality Show</a></li>
                  <li><a href='onair-movies'>Movies on Air</a></li>
                </ul>
              </li>
              <li><a href='javascript:void(0);'>Other</a>
                <ul>
                  <li><a href='service_download'>Download</a></li>
                  <li><a href='association'>Association</a></li>
                </ul>
              </li>
              <li><a href='blogs'>Blog</a></li>

            </ul>
          </nav>
          <!-- New Menu on 16-02-22 by Akash ended -->


          <!-- New Menu on 28-01-22 by Akash started -->
          <div id='main-menu' class='main-menu'>
            <div class='container-menu'>
              <nav class='navigation'>
                <span class='hamburger-menu'>Navigate
                  <span class='burger-1'></span>
                  <span class='burger-2'></span>
                  <span class='burger-3'></span>
                </span>
                <ul class='core-menu'>
                  <li><a class="menu-li-item" href="ifh-source">IFH Source<span class='toggle'></span></a>
                    <ul class='dropdown dropdown-L'>
                      <li><a href="producer-client">Producer/Client<span class='toggle2'></span></a></a>
                        <ul class='dropdown2'>
                          <li><a href='advertising-agency'>Advertising agencies</a></li>
                          <li><a href='event-management-company'>Event Management Company</a></li>
                          <li><a href='production-house'>Production house</a></li>
                          <li><a href='television-producers'>Television producers</a></li>
                          <li><a href='theater-company'>Theater Company</a></li>
                        </ul>
                      </li>
                      <li><a href='talent'>Talent<span class='toggle2'></span></a></a>
                        <ul class='dropdown2'>
                          <li><a href='fashion-designer'>Fashion designer</a></li>
                          <li><a href='fashion-show-directors'>Fashion show directors</a></li>
                          <li><a href='videographers'>Videographer</a></li>
                          <li><a href='writers'>Writers</a></li>
                          <li><a href='casting-director'>Casting Director</a></li>
                        </ul>
                      </li>
                      <li><a href='model-actor'>Model/Actor<span class='toggle2'></span></a></a>
                        <ul class='dropdown2'>
                          <li><a href='models'>Models</a></li>
                          <li><a href='actors'>Actors</a></li>
                        </ul>
                      </li>
                      <li><a href='representative-agencies'>Representative Agencies<span class='toggle2'></span></a></a>
                        <ul class='dropdown2'>
                          <li><a href='casting-agencies'>Casting agencies</a></li>
                          <li><a href='international-agencies'>International agencies</a></li>
                          <li><a href='model-coordinator'>Model coordinator</a></li>
                          <li><a href='modeling-agencies'>Modelling agencies</a></li>
                          <li><a href='publicity-agency'>Publicity Agency</a></li>
                          <li><a href='pr-agency'>PR - Agency</a></li>
                        </ul>
                      </li>
                      <li><a href='serviceproviders'>Service Providers<span class='toggle2'></span></a></a>
                        <ul class='dropdown2'>
                          <li><a href='equipment-provider'>Equipment Provider</a></li>
                          <li><a href='equipment-manufacturer'>Equipment Manufacturer</a></li>
                          <li><a href='shoot-locations'>Shoot Locations</a></li>
                          <li><a href='props-provider'>Props Provider</a></li>
                          <li><a href='photographer'>Photographer</a></li>
                          <li><a href='entertainment-institute'>Entertainment Institute</a></li>
                          <li><a href='film-tourism'>Film Tourism</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='movies'>Movies<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='upcoming-movies'>Upcoming</a></li>
                      <li><a href='onfire-movies'>Movies on Fire</a></li>
                      <li><a href='top-movies'>Top Rated</a></li>
                      <li><a href='trailer-movies'>Trailer</a></li>
                      <li><a href='all-movies'>All Movies</a></li>
                      <li><a href='shortFilms'>Short Film</a></li>
                      <li><a href='webseries'>Web Series</a></li>
                      <li><a href='theater'>Theater</a></li>
                      <li><a href='boxoffice'>Box office</a></li>
                      <li><a href='critic'>Critic</a></li>
                      <li><a href='awards'>Awards</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='ott'>OTT</a></li>
                  <li><a class="menu-li-item" href='celebs'>Celebrities<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='born_today'>Born Today</a></li>
                      <li><a href='popular'>Popular Celebs</a></li>
                      <li><a href='celebrities'>Crews</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='news'>News<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='video'>Video</a></li>
                      <li><a href='article'>Article</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='gallery'>Gallery<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='gallery_photo'>Photos</a></li>
                      <li><a href='gallery_video'>Videos</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='music'>Music<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='music_independent'>Independent Artist</a></li>
                      <li><a href='music_bollywood'>Bollywood</a></li>
                      <li><a href='music_youtube'>Youtube Sensation</a></li>
                      <li><a href='music_classical'>Classical</a></li>
                      <li><a href='music_rockbands'>Rock Bands</a></li>
                      <li><a href='music_bands'>Bands</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='adworld'>Ad World<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='adworld_tvc'>TV Commercial</a></li>
                      <li><a href='adworld_printmedia'>Print Media</a></li>
                      <li><a href='adworld_magazine'>Magazine</a></li>
                      <li><a href='adworld_press'>Press Detail</a></li>
                      <li><a href='tvc-review-list'>TVC Review</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='television'>Television<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='tv_shows'>Show</a></li>
                      <li><a href='tv_realityshow'>Reality Show</a></li>
                      <li><a href='onair-movies'>Movies on Air</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='javascript:void(0);'>Other<span class='toggle'></a>
                    <ul class='dropdown'>
                      <li><a href='service_download'>Download</a></li>
                      <li><a href='association'>Association</a></li>
                    </ul>
                  </li>
                  <li><a class="menu-li-item" href='blogs'>Blog</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- New Menu on 28-01-22 by Akash ended -->

        </div>

      </div>

    </div>


  </header>