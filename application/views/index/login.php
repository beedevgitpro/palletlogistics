<?php $this->load->view('layouts/header-login'); ?>
<div class="container-fluid p-0">
        <!-- login page with video background start-->
        <div class="auth-bg-video">
          <video id="bgvid" poster="<?php echo base_url('assets/images/other-images/coming-soon-bg.jpg')?>" playsinline="" autoplay="" muted="" loop="">
            <source src="<?php echo base_url('assets/video/auth-bg.mp4')?>" type="video/mp4">
          </video>
          <div class="authentication-box">
            <div class="text-center">
            <!-- <h4>Pallet Logistics</h4> -->
                <img src="<?php echo base_url('assets/images/PalletLogistics_Logo_transparency.png')?>" alt="">
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="text-center">
                  <h4>LOGIN</h4>
                  <h6>Enter your Username and Password </h6>
                </div>
                <form class="theme-form" method="post" action="<?php echo base_url('User/Login')?>">
                  <div class="form-group">
                    <label class="col-form-label pt-0">Username</label>
                    <input class="form-control" name="username" type="text" required="required" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" name="password" type="password" required="required" placeholder="Password">
                  </div>
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">Remember me</label>
                  </div>
                  <div class="form-group form-row mt-3 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- login page with video background end-->
      </div>
<?php $this->load->view('layouts/footer-login'); ?>