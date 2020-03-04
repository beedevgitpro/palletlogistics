<?php
$login_id=$this->session->userdata('id');
$id=$this->session->userdata('login_id');
$username=$this->session->userdata('username');

?>
<div class="page-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
              <div><img class="img-60 rounded-circle" src="../assets/images/user/1.jpg" alt="#">
                <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
              </div>
              <h6 class="mt-3 f-14"><?php echo $username; ?></h6>
              <p></p>
            </div>
            <ul class="sidebar-menu">
              <?php  $result=$this->User_Model->get_menu($login_id);

                        
            foreach($result as $row)
            {
              // print_r( $row );
            ?>
            <li><a class="sidebar-header" href="#"><?php echo $row->menuSuffix; ?><span><?php echo $row->menuName; ?></span><i class="fa fa-angle-right pull-right"></i>
              </a>
                <ul class="sidebar-submenu">
                   <?php
                $menuId=$row->menuId;
                $result1=$this->User_Model->sub_menu($login_id,$menuId);
                foreach($result1 as $row1)
                {
                ?>
                  <li><a href="<?php echo base_url().'User/'.$row1->menuLink; ?>"><i class="fa fa-circle"></i><?php echo $row1->menuName; ?></a></li>
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