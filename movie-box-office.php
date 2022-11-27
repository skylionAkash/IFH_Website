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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Movies </a>
              <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;Box Office</a>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="row">
          <div class="col-md-12">
            <div id="page_boxoffice_section">
              <div class="col-md-12 text-center">
                <h3 class="post-title">Box Office</h3>
              </div>
              <div class="col-sm-12">
                <div class="panel panel-primary">
                  <table class="table table-bordered table-striped table-filmography">
                    <thead>
                      <tr>
                        <th width="7%">DAY</th>
                        <th width="61%"></th>
                        <th width="32%">In Cr</th>
                      </tr>
                    </thead>
                    <tbody id="md_box_office">
                      <tr>
                        <td data-label="Title">1</td>
                        <td data-label="Artist">Fri Dec 17 2021</td>
                        <td data-label="Lyrics">3</td>
                      </tr>
                      <tr>
                        <td data-label="Title">2</td>
                        <td data-label="Artist">Sat Dec 18 2021</td>
                        <td data-label="Lyrics">4</td>
                      </tr>
                      <tr>
                        <td data-label="Title">3</td>
                        <td data-label="Artist">Sun Dec 19 2021</td>
                        <td data-label="Lyrics">5</td>
                      </tr>
                      <tr>
                        <td style="border:none; font-weight:700;"></td>
                        <td style="border:none; font-size:12px; font-weight:600; text-transform: capitalize;">Net Total India</td>
                        <td style="border:none; font-weight:700;">12.00</td>
                      </tr>
                      <tr>
                        <td style="border:none; font-weight:700;"></td>
                        <td style="border:none; font-size:12px; font-weight:600; text-transform: capitalize;">Worldwide Collection Except(India)</td>
                        <td style="border:none; font-weight:700;">0.00</td>
                      </tr>
                      <tr>
                        <td style="border:none; font-weight:700;"></td>
                        <td style="border:none; font-size:12px; font-weight:600; text-transform: capitalize;">Worldwide (Grand Total)</td>
                        <td style="border:none; font-weight:700;">12.00</td>
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