<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.jpg'); ?>">
        <!-- App title -->
        <title>BUDDHAA TECH Pvt.Ltd.</title>

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
        <script src="<?php echo base_url('assets/js/wallet.js')?>"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -
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
        </div>-->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
			 <?php $this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
				<?php $this->load->view('headerfile/leftmenu');
				
				 $cr_list="98";
                 $surplus_id="2";
				?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
			<?php echo $login_id=$this->session->userdata('id'); ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Wallet</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Wallet</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('User/dashboard')?>">Home</a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row text-center">

                                                     <div class="col-sm-6"></div>
 <div class="col-sm-6">
    
     <input type="hidden" value="<?php echo $surplus_id; ?>" name="s_id" id="s_id"/>
     <center><br><br>
         <label class="radio-inline">Credit</label><input type="radio" name="db" id="r1" value="debit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debit<label class="radio-inline"> </label><input type="radio" name="db" id="r2" value="credit"><br><br></center>
    <div class="col-sm-6">
        <label> Account</label>
        
        <!--<input type="text" name="alpha" id="al" class="form-control">-->
        <select name="alpha" id="al" class="form-control">
                <option value="">Select</option>
                
        </select>
        <br>
    </div>
	<div class="col-sm-6">
            <label> Amount</label><input type="text" name="am" value="0" id="am" class="form-control" onkeyup="calculateWalletAAmount()"> <br></div>
     <span id="inc"></span>
     <div class="col-sm-6"  style="float: right; text-align: right;"><br><input type="button" name="add" class="btn btn-primary plusbtn" value="&nbsp;&nbsp;&nbsp;ADD&nbsp;&nbsp;&nbsp;" id="addd" disabled><br><br></div>
 </div>
    <form name="for" action="insert.php" method="post"> 
	<div class="col-sm-4"></div>
        <div class="col-sm-8">
<table class="test table table-bordered">
    <tr class="btn-success" style="background-color:#42bcf4;">
      <td><input id="check_all" class="formcontrol" type="checkbox"/></td>
    <td>Account</td>
    <td>Debit</td>
    <td>Credit</td>
  </tr>
</div>
</table><br><br>
<div class="col-sm-9" style="text-align: right"><br><br></div>
<div class="col-sm-3"><input type="button" value="Remove" class="minusbtn btn btn-danger" id="rmv" /></div><br><br><div class="col-sm-12">
    <div class="col-sm-6" style="text-align: right"><label>Total Debit</label></div><div class="col-sm-6" style="text-align: right"> <input type="text" name="td" class="form-control" id="td" readonly><br></div>

<div class="col-sm-6" style="text-align: right"><label> Total Credit  </label></div><div class="col-sm-6" style="text-align: right">  <input type="text" name="tc" id="tc" class="form-control" readonly><br></div>
 <div class="col-sm-6" style="text-align: right"><label>Difference  </label></div><div class="col-sm-6" style="text-align: right">  <input type="text" name="dif" class="form-control" id="dif" readonly><br></div>
<div class="col-sm-6" style="text-align: right"><label>Comment </label></div><div class="col-sm-6" style="text-align: right">  <textarea name="cm" id="cm" class="form-control" style="resize: none"></textarea><br></div>
 <div class="col-sm-6"></div><div class="col-sm-6" style="text-align: right"><input type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;submit&nbsp;&nbsp;&nbsp;" class="btn btn-primary" id="ss" disabled></div></div>
</form>  
</div>
<div class="modal fade" id="calculate" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Calculator</h4>
        </div>
        <div class="modal-body">
            <legend>SurPlus</legend>
            <div class="col-sm-4"> <label>Cash Amount</label> </div><div class="col-sm-8"><input type="text" id="c_amount" name="cash_amount" value="0" class="form-control" ><br></div><br>
            <div class="col-sm-4"> <label>Surplus(%)</label> </div><div class="col-sm-8"><input type="text" id="surplus" name="sur_plus" value="2" class="form-control"><br></div><br>
            <div class="col-sm-4"> <label>Wallet Amount</label> </div><div class="col-sm-8"><input type="text" id="w_amount" name="wallet_amount" value="0"  class="form-control" ><br></div><br>
           
         <legend>Discount</legend>
            <div class="col-sm-4"> <label>Cash Amount</label> </div><div class="col-sm-8"><input type="text" id="cc_amount" name="c_cash_amount" value="0" class="form-control"><br></div><br>
            <div class="col-sm-4"> <label>Discount(%)</label> </div><div class="col-sm-8"><input type="text" id="c_surplus" name="c_sur_plus" value="2" class="form-control"><br></div><br>
            <div class="col-sm-4"> <label>Wallet Amount</label> </div><div class="col-sm-8"><input type="text" id="c_w_amount" name="wallet_amount" value="0"  class="form-control" ><br></div><br>
            <br><br>
         <br><br>           
        </div>   
      <div class="modal-footer">
        </div></form>
      </div>

    </div>
	
  </div>
 </div>
       
	
       </div>
<div class="loading">
  <div class="sk-fading-circle">
  <div class="sk-circle1 sk-circle"></div>
  <div class="sk-circle2 sk-circle"></div>
  <div class="sk-circle3 sk-circle"></div>
  <div class="sk-circle4 sk-circle"></div>
  <div class="sk-circle5 sk-circle"></div>
  <div class="sk-circle6 sk-circle"></div>
  <div class="sk-circle7 sk-circle"></div>
  <div class="sk-circle8 sk-circle"></div>
  <div class="sk-circle9 sk-circle"></div>
  <div class="sk-circle10 sk-circle"></div>
  <div class="sk-circle11 sk-circle"></div>
  <div class="sk-circle12 sk-circle"></div>
</div>
</div>
                            
                            </div>
                        </div>
                    </div>
             
                </div>
            </div>
        </div>
       
       
    </div>
<div id="meatModal" class="modal fade" tabindex="-1" role="dialog">

<div class="modal-dialog">
	<div class="modal-content">
	 <div class="modal-header" style="text-align:right;">
       <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
        
      </div>
	  <div class="modal-body">
        <img src="" id="meatModalImg" width="100%">
		 
	  </div>
	  
	</div>
	
</div>

</div>

                        </div>
                        <!-- end row -->



                        <!-- end row -->


                      
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

               <?php $this->load->view('headerfile/footer');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->

            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js')?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

        <!-- Counter js  -->
        <script src="<?php echo base_url('assets/plugins2/waypoints/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/counterup/jquery.counterup.min.js')?>"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url('assets/plugins/morris/morris.min.js')?>"></script>
		<script src="<?php echo base_url('assets/plugins/raphael/raphael-min.js')?>"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url('assets/pages/jquery.dashboard.js')?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

    </body>
<?php echo site_url('get_data.php') ;?>
	<script>
	$(document).ready(function() {
    $("#r1").click(function() {
        ddd = "debit";
        $("#al").load(<?php echo base_url('get_data') ;?>, {"debit": ddd});
        $('#addd').prop('disabled', false);
    });
    $("#r2").click(function() {
        $("#al").load('get_data.php', {"credit": ''});
        $("#inc").load('in.php');
        $('#addd').prop('disabled', false);
    });
});
$(document).ready(function() {
    $('.plusbtn').click(function() {
        var type = document.querySelector('input[name = "db"]:checked').value;
        var s_id = document.getElementById('s_id').value;


        var aa = document.getElementById('al').value;
        bb = $("#al option:selected").text();
        if (document.getElementById('r1').checked) {
            var f_amount = document.getElementById('f_amount').value;
            var final_amount = document.getElementById('final_amount').value;
            var db = document.getElementById('am').value;
            var cr = 0;
        } else {

            var cr = document.getElementById('am').value;
            var db = 0;
        }
        if (document.getElementById('am').value > 0) {
            if (type != "debit") {
                $(".test").append('<tr><td><input class="case" type="checkbox" /></td><td><input type="text" class="txtbox border-none" value="' + bb + '" readonly/><input type="hidden" class="txtbox border-none" value="' + aa + '" name="n[]" /></td><td><input type="text" class="txtbox dbb border-none" value="' + db + '" name="e[]" readonly/></td><td><input type="text" class="txtbox cbb border-none" value="' + cr + '"  name="c[]" readonly/></td></tr>');
            } else {
                $("#id_surplus").keyup(function() {
                    calculateWalletAAmount();
                });
                var s_p = document.getElementById('id_surplus').value;
                if (s_p < 3.51) {
                    if(s_p>0.0){
                    $(".test").append('<tr><td><input class="case" type="checkbox" /></td><td><input type="text" class="txtbox border-none" value="' + bb + '" readonly/><input type="hidden" class="txtbox border-none" value="' + aa + '" name="n[]" /></td><td><input type="text" class="txtbox dbb border-none" value="' + final_amount + '" name="e[]" readonly/></td><td><input type="text" class="txtbox cbb border-none" value="' + cr + '"  name="c[]" readonly/></td></tr>');
                    $(".test").append('<tr><td><input class="case" type="checkbox" /></td><td><input type="text" class="txtbox border-none" value="' + 'Surplus' + '" readonly/><input type="hidden" class="txtbox border-none" value="' + s_id + '" name="n[]" /></td><td><input type="text" class="txtbox dbb border-none" value="' + cr + '" name="e[]" readonly/></td><td><input type="text" class="txtbox cbb border-none" value="' + f_amount + '"  name="c[]" readonly/></td></tr>');
                    }else{
                     $(".test").append('<tr><td><input class="case" type="checkbox" /></td><td><input type="text" class="txtbox border-none" value="' + bb + '" readonly/><input type="hidden" class="txtbox border-none" value="' + aa + '" name="n[]" /></td><td><input type="text" class="txtbox dbb border-none" value="' + final_amount + '" name="e[]" readonly/></td><td><input type="text" class="txtbox cbb border-none" value="' + cr + '"  name="c[]" readonly/></td></tr>');   
                    }
                    } else {
                    alert("you can not give surplus more than 3.5%")
                }
            }
            calculateTotal();
            myfunction();
            $('#rmv').prop('disabled', false);
            $('#am').val('0');
            if (type == "debit") {
                $('#f_amount').val('0');
                $('#final_amount').val('0');
            }
        } else {
            alert('enter correct amount');
        }

    });
    $('.minusbtn').click(function() {
        if ($(".test tr").length != 1)
        {
            $('.case:checkbox:checked').parents("tr").remove();
        }
        else
        {
            alert("You cannot delete first row");
            $('#rmv').prop('disabled', true);
        }
        calculateTotal();
        myfunction();
    });

});

$(document).ready(function() {
    if (document.querySelector('input[name = "db"]:checked')) {
        var type = document.querySelector('input[name = "db"]:checked').value;
        if (type == "debit") {
            $("#id_surplus").keyup(function() {
                calculateWalletAAmount();

            });
        }
    }
});
$(document).ready(function() {
    $('#al').change(function() {
        var type = document.querySelector('input[name = "db"]:checked').value;
		
        if (type == "debit") {
            var aa = document.getElementById('al').value;
            if(aa!=""){
            $('#inc').load("inc.php", {'id': aa});
        }else {
            var aa = document.getElementById('al').value;
            $('#inc').load("in.php", {'id': aa});
        }
        } else {
            var aa = document.getElementById('al').value;
            $('#inc').load("in.php", {'id': aa});
        }
    });
});

$(document).on('change', '#check_all', function() {
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});
$(document).ready(function() {
    if ($(".test tr").length != 1) {
        $('#rmv').prop('disabled', false);
    } else {
        $('#rmv').prop('disabled', true);
    }
});

$(document).ready(function() {
    $("#am").keyup(function() {
        $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
//        calculateWalletAAmount();
    });
});



$(document).ready(function() {
    $("#c_amount").keyup(function() {
        calculateWalletAmount();
    });
});

$(document).ready(function() {
    $("#w_amount").keyup(function() {
        calculateCashAmount();
    });
});
$(document).ready(function() {
    $("#cc_amount").keyup(function() {
        calculateWWalletAmount();
    });
});

$(document).ready(function() {
    $("#c_w_amount").keyup(function() {
        calculateCCashAmount();
    });
});


function calculateTotal() {

    totald = 0;
    totalc = 0;
    difference = 0;
    $('.dbb').each(function() {
        totald += parseFloat($(this).val());
    });
    $('#td').val(totald.toFixed(4));
    $('.cbb').each(function() {
        totalc += parseFloat($(this).val());
    });
    $('#tc').val(totalc.toFixed(4));
    difference = totalc - totald;
    $('#dif').val(difference.toFixed(4));

}
function myfunction() {
    if (($('#td').val() == '0.0000') && ($('#dif').val() == '0.0000')) {
        $('#ss').prop('disabled', true);
    }
    else if ($('#dif').val() != '0.0000') {
        $('#ss').prop('disabled', true);

    }

    else {
        $('#ss').prop('disabled', false);
    }
}
function calculateWalletAAmount() {
    w_amount = 0;
    c_amount = parseFloat($("#am").val());
    surplus = parseFloat($("#id_surplus").val());
    w_amount = (c_amount * (surplus) / 100);
    $("#f_amount").val(w_amount.toFixed(4));
    final = w_amount + c_amount;
    $("#final_amount").val(final.toFixed(4));
}

function calculateWalletAmount() {
    w_amount = 0;
    c_amount = parseFloat($("#c_amount").val());
    surplus = parseFloat($("#surplus").val());
    w_amount = (c_amount * (100 + surplus) / 100);
    $("#w_amount").val(w_amount.toFixed(4));
}


function calculateCashAmount() {
    c_amount = 0;
    w_amount = parseFloat($("#w_amount").val());
    surplus = parseFloat($("#surplus").val());
    c_amount = ((w_amount * 100) / (100 + surplus));
    $("#c_amount").val(c_amount.toFixed(4));
}

function calculateWWalletAmount() {
    w_amount = 0;
    c_amount = parseFloat($("#cc_amount").val());
    surplus = parseFloat($("#c_surplus").val());
//    w_amount=(c_amount*(100-surplus)/100);
    w_amount = (100 / (100 - surplus)) * c_amount;
    $("#c_w_amount").val(w_amount.toFixed(4));
}


function calculateCCashAmount() {
    c_amount = 0;
    w_amount = parseFloat($("#c_w_amount").val());
    surplus = parseFloat($("#c_surplus").val());
//    c_amount=((w_amount*100)/(100-surplus));
    c_amount = w_amount / (100 / (100 - surplus));
    $("#cc_amount").val(c_amount.toFixed(4));
}
</script>
</html>