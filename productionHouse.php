<!-- Header Stared Here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header Ended Here -->


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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Production House </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Reliance Entertainment</a>
            </div>
          </div>
        </div>

        <!-- Content start -->
        <div class="row">
          <div class="col-md-12">
            <div class="upcoming-box details-actor-section">
              <!-- 1st -->
              <div class="upcoming_top mb-3">
                <div class="upcoming_top-col col-md-3">
                  <a href="JavaScript:Void(0);">
                    <img src="images/upcoming-movies/reliance-entertainment.jpg" alt="reliance-entertainment" class="img-responsive" id="production-house">
                  </a>
                </div>
                <div class="col-md-9">
                  <iframe width="100%" height="290" src="https://www.youtube.com/embed/e1RMBwk7_EU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-- second row -->
              <div class="details col-md-12 col-sm-12 col-xs-12 p-0">
                <div class="row productionHouse-h3">
                  <div class="col-xs-12">
                    <h1 class="post-title" id="prod_name"><b> Reliance Entertainment</b></h1>
                  </div>
                  <div class="col-xs-12">
                    <a id="claimbtn" class="claim-page-btn btn btn-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Claim Page</a>
                    <h3 class="established_at">Established : <b>2005</b></h3>
                  </div>
                  <div class="col-xs-12">
                    <h3 class="owner">Owner : <b> --- </b></h3>
                  </div>
                  <div class="col-xs-12">
                    <h3>About:</h3>
                    <div id="personalDetails">Reliance Entertainment has built an impressive film production slate in Hindi, English &amp; other Indian languages, which it markets and distributes worldwide. Following its association with IM Global, the company now benefits from an international sales team with an excellent reputation and global presence dedicated to selling its Bollywood and regional language slate.</div>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="col-md-12 col-sm-12 col-xs-12 p-0 mt-3 mb-3" id="celeb-filmograpgy-section">
                <h3 class="post-title">Filmography</h3>
                <div class="panel panel-primary table-responsive">
                  <table class="table table-bordered table-striped table-filmography">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Released Date</th>
                        <th>Type</th>
                        <th>Credited As</th>
                        <th>Movie</th>
                      </tr>
                    </thead>
                    <tbody id="md_box_office">
                      <tr>
                        <td class="text-center">55</td>
                        <td>30 Dec 2022</td>
                        <td>Film</td>
                        <td>Actor</td>
                        <td><a title="Mogul" href="">Mogul</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">54</td>
                        <td>14 Feb 2022</td>
                        <td>Film</td>
                        <td>Actor, Producer</td>
                        <td><a title="Laal Singh Chaddha" href="">Laal Singh Chaddha</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">53</td>
                        <td>02 Apr 2021</td>
                        <td>Film</td>
                        <td>Guest Appearance</td>
                        <td><a title="Koi Jaane Na" href="">Koi Jaane Na</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">52</td>
                        <td>26 July 2019</td>
                        <td>Film</td>
                        <td>Singer</td>
                        <td><a title="Judgementall Hai Kya" href="">Judgementall Hai Kya</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">51</td>
                        <td>08 Nov 2018</td>
                        <td>Film</td>
                        <td>Actor</td>
                        <td><a title="Thugs of Hindostan" href="">Thugs of Hindostan</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">50</td>
                        <td>19 Oct 2017</td>
                        <td>Film</td>
                        <td>Actor, Producer</td>
                        <td><a title="Secret Superstar" href="">Secret Superstar</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">49</td>
                        <td>23 Dec 2016</td>
                        <td>Film</td>
                        <td>Actor, Producer</td>
                        <td><a title="Dangal" href="">Dangal</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">48</td>
                        <td>19 Dec 2014</td>
                        <td>Film</td>
                        <td>Actor</td>
                        <td><a title="PK" href="">PK</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
          </div>
        </div>
        <!-- Content end -->
      </div>

      <!-- right side bar -->
      <?php include('include/right-side-bar.php'); ?>

      <!-- Modal Start-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ad-agency-pop-up-form-modal">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contact Advertising Agency</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="provider_frm" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Your name" name="name" id="name" data-validation="required">
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter Your email address" name="email" id="email" data-validation="required">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="control-label">Phone:</label>
                    <input type="phone" class="form-control" placeholder="Enter Your Phone Number" name="phone" id="phone" data-validation="required">
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="slug" id="slug" value="mr-chandrakanta-de">
                  <div class="col-md-12 form-group">
                    <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit sub-btn" data-id="submit"><i class="fas fa-check"></i> Submit</button>
                    <a href=""> <button type="button" class="btn btn-danger cancel-btn"><i class="fa fa-times-circle"></i> Cancel</button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->

    </div>
  </div>
</section>


<!-- Footer started here -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer Ended Here -->