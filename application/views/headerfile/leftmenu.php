<?php
$login_id=$this->session->userdata('id');
$id=$this->session->userdata('login_id');
$login_type=$this->session->userdata('login_type');

$username=$this->session->userdata('username');

?>

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $username; ?><span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href=""><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                                <li><a href="<?php echo base_url('User/Logout')?>"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>

                        <ul>

						<?php
                        if($login_type == 'A' or $login_type == 'C' ){
						$results=$this->User_Model->get_menu($login_id,$login_type);

                       foreach($results  as $key => $row ){ ?>
                         <?php //echo "<pre>";print_r( $results );
                         //echo $row['icon'];
                         //exit; ?>
						 <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="<?php echo $row['icon']; ?>"></i><span><?php echo $key ?></span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
								<?php foreach($row['d']  as $keys => $rows ){ ?>
                                
                                    <li><a href="<?php echo base_url('User/'). $rows?>"><?php echo  $keys; ?></a></li>
								<?php } ?>	
                                    
                                </ul>
                            </li>
                          <?php
                           }
                       }
                       else{
                        $result=$this->User_Model->get_menu($login_id,$login_type);

                        // echo "<pre>";print_r($login_type);exit;
                        foreach($result as $row)
                        {
                        ?>
                         <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><?php echo $row->menuSuffix; ?><span><?php echo $row->menuName; ?></span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <?php
                                $menuId=$row->menuId;
                                $result1=$this->User_Model->sub_menu($login_id,$menuId);
                                 // echo "<pre>";print_r($result1);exit;
                                foreach($result1 as $row1)
                                {
                                ?>
                                    <li><a href="<?php echo base_url().'User/'.$row1->menuLink; ?>"><?php echo $row1->menuName; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                 
                                </ul>
                            </li>
                           <?php
                           }
                           ?>
                           
                       <?php } ?>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    

                </div>
                <!-- Sidebar -left -->

            </div>