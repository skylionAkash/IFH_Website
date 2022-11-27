<!-- Header Stared Here -->
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!-- Header Ended Here -->


<section class="ifh-Ad_a-sec1 sec-padd">
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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Genre </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Action</a>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="row">
          <div class="col-md-12">
            <div class="row  mt-3" id="page_boxoffice_section">
              <div class="col-md-6">
                <h3 class="post-title">GENRE : DRAMA</h3>
              </div>
              <div class="col-md-6">
                <p class="float-end"><b>Total Records:</b> <span id="total-records">14030</span></p>
              </div>
              <div class="col-sm-12">
                <div class="panel panel-primary">
                  <table class="table table-bordered table-striped table-filmography">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Released Date</th>
                        <th>Language</th>
                        <th>Movie</th>
                      </tr>
                    </thead>
                    <tbody id="md_box_office">
                      <tr>
                        <td class="text-center">1</td>
                        <td>05 July 983</td>
                        <td>Marathi</td>
                        <td><a title="Devta" target="_blank" href="">Devta</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td>29 Dec 2023</td>
                        <td>Marathi</td>
                        <td><a title="Vitthal Vitthal" target="_blank" href="">Vitthal Vitthal</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                        <td>29 Dec 2023</td>
                        <td>Hindi</td>
                        <td><a title="Navy Day" target="_blank" href="">Navy Day</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">4</td>
                        <td>29 Dec 2023</td>
                        <td>Hindi</td>
                        <td><a title="Mughal Road" target="_blank" href="">Mughal Road</a></td>
                      </tr>
                      <tr>
                        <td class="text-center">5</td>
                        <td>29 Dec 2023</td>
                        <td>Hindi</td>
                        <td><a title="Gobar" target="_blank" href="">Gobar</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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