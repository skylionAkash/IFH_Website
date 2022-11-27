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
              <a href="JavaScript:Void(0);" class="btn btn-default "> &nbsp; Download </a>
              <!-- <a href="JavaScript:Void(0);" style="text-transform: capitalize;" id="slugname" class="btn btn-default ">&nbsp;TV Reality Show </a> -->
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

        <!-- Content -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-sm-12">
              <div class="row">
                <div class="mb-1">
                  <h1 class="post-title">Download</h1>
                </div>
                <div class="">
                  <div class="panel ">
                    <table class="table table-bordered table-striped table-filmography">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="md_box_office" class="other-download-tbody">
                        <tr>
                          <td class="text-center">1</td>
                          <td class="name">Chingi Movie<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename="">Download</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td class="name">Film Together Dharmendra And Hema Malini<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename="">Download</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td class="name">Movies To Look Out In 2020<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename="">Download</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">4</td>
                          <td class="name">10 Glorious Year Of Angry Young Man Amitabh Bachchan Volume I (1969 - 1979)<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename=" ">Download</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">5</td>
                          <td class="name">Shahensha Continues To Rule Indian Film Industry Amitabh Bachchan Volume II (1980 - 1989)<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename="">Download</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">6</td>
                          <td class="name">Ajooba Of Indian Cinema 10 Glorious Year Of Amitabh Bachchan Volume III (1990 - 1999)<small></small></td>
                          <td><a class="download-link" href="#downloadModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-downloadid="" data-filename="">Download</a></td>
                        </tr>

                      </tbody>
                    </table>
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




      <!-- Modal start -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog download-popup-modal-dailog">
          <div class="row ad-agency-row">
            <div class="col-md-5 p-0">
              <div class="ad-agency-left-icon-wrapper">
                <img src="images/ifh_source/download-left.jpg" alt="left-img">
              </div>
            </div>
            <div class="col-md-7 p-0">
              <div class="modal-content ">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Download File</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="" method="post" class="">
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
                        <input type="number" class="form-control" placeholder="Enter Phone number" name="contact_no" id="phone" data-validation="required">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success save_btn submit sub-btn" data-id="submit"><i class="fas fa-check"></i> Submit</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->
      <!-- right side bar -->
      <?php include('include/right-side-bar.php'); ?>

    </div>
  </div>
</section>


<!-- Footer started here -->
<?php include('include/footer-box.php'); ?>
<?php include('include/footer.php'); ?>
<!-- Footer Ended Here -->