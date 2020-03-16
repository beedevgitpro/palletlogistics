<?php $this->load->view('layouts/main_header'); ?>
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>E-commerce</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Dashboard</li>
                      <li class="breadcrumb-item active">E-commerce</li>
                    </ol>
                  </div>
                </div>
                <!-- Bookmark Start-->
                <div class="col">
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Calendar"><i data-feather="calendar"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Mail"><i data-feather="mail"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Bookmark Ends-->
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="navigation"></i></div>
                      <div class="media-body"><span class="m-0">Total Movements</span>
                        <h4 class="mb-0 counter"><?php $result=$this->User_Model->get_total_member($login_id); echo $total_member=$result['total_member']; ?></h4><i class="icon-bg" data-feather="navigation"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="box"></i></div>
                      <div class="media-body"><span class="m-0">Total Bills</span>
                        <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="box"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             <!--  <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-12 col-lg-12">
            <div class="card">
              <div class="card-body">
                ji
            </div>
          </div>
          </div>
          </div>
        </div>   -->
              
              

                              
                    </div>
                  </div>
                </div>
              
          <!-- Container-fluid Ends-->
        
       <?php $this->load->view('layouts/footer'); ?>