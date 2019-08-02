
<div class="container">
    <div class="row">
      <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
          </div>
          <div class="row user-detail">
              <div class="col-lg-12 col-sm-12 col-12">
                  <img src="<?php echo base_url(); ?>asset/images/1.jpg" class="rounded-circle img-thumbnail" alt="College Logo">
                  <h5><?php echo $college_info_byid->college_name;?></h5>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $college_info_byid->address;?></p>

                  <hr>
                  <a href="#" class="btn btn-success btn-sm">Registration Number</a>
                  <a href="#" class="btn btn btn-sm"><?php echo $college_info_byid->registration_number;?></a>

                  <hr>
                  <span>Lorem ips consectetur adipisium ,eiusmod tempor incididuin reprehendeanim.</span>
              </div>
          </div>
          <div class="row user-social-detail">
              <div class="col-lg-12 col-sm-12 col-12">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </div>
          </div>
      </div>
    </div>
  </div>