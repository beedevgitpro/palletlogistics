<?php
$login_id=$this->session->userdata('id');
$id=$this->session->userdata('login_id');
$login_type=$this->session->userdata('login_type');
$username=$this->session->userdata('username');

?>
<!-- Page Body Start-->
<div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="<?php echo base_url('User/dashboard')?>"><img src="<?php echo base_url('assets/images/PalletLogistics_Logo_transparency.png')?>" width="150" alt=""><!-- <h4>Pallet Logistics</h4> --></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
              <div><img class="img-60 rounded-circle" src="<?php echo base_url('assets/images/user/1.jpg')?>" alt="#">
                <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
              </div>
              <h6 class="mt-3 f-14"><?php echo $username; ?></h6>
              <!-- <p>general manager.</p> -->
            </div>
            <ul class="sidebar-menu">
            <?php
						$result=$this->User_Model->get_menu($login_id,$login_type);
						foreach($result as $row)
						{
						?>
              <li><a class="sidebar-header" href="#"><?php echo $row->menuSuffix; ?><span><?php echo $row->menuName; ?></span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                <?php
								$menuId=$row->menuId;
								$result1=$this->User_Model->sub_menu($login_id,$menuId);
								foreach($result1 as $row1)
								{
								?>
                  <li><a href="<?php echo base_url().'User/'.$row1->menuLink; ?>"><i class="fa fa-circle"></i><span><?php echo $row1->menuName; ?></span></a></li>
                  <?php
									}
									?>
                </ul>
              </li>
              <?php
						   }
						   ?>
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->