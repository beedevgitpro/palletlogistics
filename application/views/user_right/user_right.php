<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/'); ?>">
        <!-- App title -->
        <title>saas</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/morris/morris.css')?>">

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">
        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
        
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>	
   <script type="text/javascript">
$(document).ready(function () {
$('#user_name').click(function () {
 $('#dvselection1').hide('fast');
  $('#dvselection').show('fast');
  });
 $('#group_name').click(function () {
 $('#dvselection').hide('fast');
 $('#dvselection1').show('fast');
  });
 });
</script>
<script type="text/javascript">
function moveSelectedItems(source, destination){
  var selected = $(source+' option:selected').remove();
  var sorted = $.makeArray($(destination+' option').add(selected)).sort(function(a,b){
    return $(a).text() > $(b).text() ? 1:-1;
  });
  $(destination).empty().append(sorted);
}
</script>
<script>
$(document).ready(function(){
  $('#t1add2').click(function(){
    moveSelectedItems('#bp2', '#bps2');
  });
  $('#t1remove2').click(function(){
    moveSelectedItems('#bps2', '#bp2');
  });

});
$(document).ready(function(){
  $('#ss2').click(function(){
     $('#bps2 option').prop('selected',true); 
  });
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#t1add').click(function(){
    moveSelectedItems('#bp', '#bps');
  });
//  $('#t1addAll').click(function(){
//    $('#t1available option').attr('selected', 'true');
//    moveSelectedItems('#t1available', '#t1published');
//  });
  $('#t1remove').click(function(){
    moveSelectedItems('#bps', '#bp');
  });
//  $('#t1removeAll').click(function(){
//    $('#t1published option').attr('selected', 'true');
//    moveSelectedItems('#t1published', '#t1available');
//  });
});
$(document).ready(function(){
  $('#ss').click(function(){
     $('#bps option').prop('selected',true); 
  });
  });
function Userright(data)
	{
		var name=data.value;
		alert(name);
		$('#bp').load('<?php echo base_url("User/getData")?>',{"us1":name});
	}
function Userrights(data)
	{
		var name=data.value;
		alert(name);
		$('#bps').load('<?php echo base_url("User/getData")?>',{"use1":name});
	}
	
	function Userright2(data)
	{
		var name=data.value;
		alert(name);
		$('#bp2').load('<?php echo base_url("User/getData")?>',{"us2":name});
	}
function Userrights2(data)
	{
		var name=data.value;
		alert(name);
		$('#bps2').load('<?php echo base_url("User/getData")?>',{"use2":name});
	}
</script>

    </head>


    <body class="fixed-left">

        <!-- Loader 
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
-->
        <!-- Begin page -->
        <div id="wrapper">
              <!-- Top Bar Start -->
			 <?php $this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
				<?php $this->load->view('headerfile/leftmenu');?>
				  <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">User Right</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            User Right
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


      <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">
                                         <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
	 <div class="box box-success">
	 <div class="col-md-12">&nbsp;</div>
	 <div class="box-body">
	 <div class="row">
	 <div class="col-md-1"></div>
	 <div class="col-md-10">
	 <label for="user_name">
	<input type="radio" id="user_name" width="10px" height="10px" name="option"  value="username" onselect="ShowHideDiv(this);"/><strong>Username</strong>&nbsp;&nbsp;<br/>
	</label>
	<label for="group_name">
	<input type="radio" id="group_name" width="10px" height="10px" name="option" value="groupname" onselect="ShowHideDiv(this);"/><strong>Groupname</strong>
	</label>
	</div>
	 </div>
	 </div>
	 <div class="line"></div>
	 <div class="col-md-12">&nbsp;</div>
	 <div class="box-body">
	 <div id="groupname_selection">
	 <form method="post" action="<?php echo base_url('User/insert_user_right');?>" id="dvselection1" style="display: none">
	 
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-3">
	<select name="role" class="form-control" onchange="Userright(this);Userrights(this)">
	<option value="">--- Select Role ---</option>
	<?php
	$result=$this->User_Model->get_user_role();
	foreach($result as $row)
	{
	?>
	<option value="<?php echo $row->roleId; ?>"><?php echo $row->role; ?></option>
	<?php
	}
	?>
	</select>
	</div>
	<div class="col-md-5"></div>
	</div>
	
	<!--role assign-->
<div class="content animate-panel">
        <div class="row">
            <div class="col-md-4" style="">
                <div class="hpanel ">
                    <div class="panel-body">
                        <div class="text-center well">
                        <select id="bp" size="10" multiple="multiple" class="box form-control" name="left_select[]" style="overflow: auto">
                        
			</select>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="">
			    <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"></h2>
                            <a id="t1add" class="btn btn-success btn-lg">Give <i class="fa fa-arrow-right"></i></a>
                        </div>
						
                    </div>
                </div>
				</div>
				<div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"></h2>
                            <a id="t1remove" class="btn btn-info btn-lg"><i class="fa fa-arrow-left"></i>Take</a>
                        </div>
						
                    </div>
                </div>
				</div>
				<div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><button type="submit" id="ss" class="btn btn-danger btn-lg"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong></strong></button></h2><strong><strong>
                            
                        </strong></strong></div><strong><strong>
						
                    </strong></strong></div><strong><strong>
                </strong></strong></div><strong><strong>
				</strong></strong></div><strong><strong>
            </strong></strong></div><strong><strong>
            <div class="col-md-4">
                <div class="hpanel">
                    <div class="panel-body">
                         <div class="text-center well">
                        <select id="bps" class="form-control box" size="10" multiple="multiple" name="right_select1[]" style="overflow: auto; ">
              
			</select>  
                        </div>  
                    </div>
                </div>
            </div>
        </strong></strong></div><strong><strong>
        		
    </strong></strong></div>
	</form>
	</div>
	<!--user-->
	 <div id="username_selection">
	 <form method="post" action="<?php echo base_url('User/insert_user_right1');?>" id="dvselection" style="display: none">
	 
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-3">
	<select name="username" class="form-control" onchange="Userright2(this);Userrights2(this)">
	<option value="">--- Select User ---</option>
	<?php
	$result=$this->User_Model->get_login();
	foreach($result as $row)
	{
	?>
	<option value="<?php echo $row->login_id; ?>"><?php echo $row->username; ?></option>
	<?php
	}
	?>
	</select>
	</div>
	<div class="col-md-5"></div>
	</div>
	
	<!--role assign-->
<div class="content animate-panel">
        <div class="row">
            <div class="col-md-4" style="">
                <div class="hpanel ">
                    <div class="panel-body">
                        <div class="text-center well">
                        <select id="bp2" size="10" multiple="multiple" class="box form-control" name="left_select[]" style="overflow: auto">
                        
			</select>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="">
			    <div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"></h2>
                            <a id="t1add2" class="btn btn-success btn-lg">Give <i class="fa fa-arrow-right"></i></a>
                        </div>
						
                    </div>
                </div>
				</div>
				<div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"></h2>
                            <a id="t1remove2" class="btn btn-info btn-lg"><i class="fa fa-arrow-left"></i>Take</a>
                        </div>
						
                    </div>
                </div>
				</div>
				<div class="col-md-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs"><button type="submit" id="ss2" class="btn btn-danger btn-lg"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong></strong></button></h2><strong><strong>
                            
                        </strong></strong></div><strong><strong>
						
                    </strong></strong></div><strong><strong>
                </strong></strong></div><strong><strong>
				</strong></strong></div><strong><strong>
            </strong></strong></div><strong><strong>
            <div class="col-md-4">
                <div class="hpanel">
                    <div class="panel-body">
                         <div class="text-center well">
                        <select id="bps2" class="form-control box" size="10" multiple="multiple" name="right_select[]" style="overflow: auto; ">
              
			</select>  
                        </div>  
                    </div>
                </div>
            </div>
        </strong></strong></div><strong><strong>
        		
    </strong></strong></div>
	</form>
	</div>
	<!--user-->
	</div>
		<!--role assign-->
      <!-- /.row -->
	  </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  </div>
  </div>


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018- 2019 © Foxjab.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>
		<link href="<?php echo base_url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/plugins/multiselect/css/multi-select.css')?>"  rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')?>" rel="stylesheet" />
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js');?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js');?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/plugins2/parsleyjs/parsley.min.js')?>"></script>
		
        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>
		
        <script src="<?php echo base_url('assets/plugins2/bootstrap-filestyle/js/bootstrap-filestyle.min.js')?>"></script>
        
       


        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
            $(function () {
                $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function () {
                    return false; // Don't submit form for this demo
                });
            });
		</script>

    </body>


</html>