<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jun 2018 06:22:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php  base_url('assets/images/favicon.jpg'); ?>">
        <!-- App title -->
         <title>saas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Popper JS -->
 
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

    </head>

<style type="text/css"> .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
      
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    /*new css*/
td.title.sender-head {
    border-bottom-style: double;
    border-top-style: double;
    padding: 20px 0;
    background: #eeeeee;
}
td.title.sender-head span {
    font-size: 14px;
    font-weight: 600;
    line-height: 15px;
}
td.title.sender-head p {
    color: #131313;
    margin: 0;
    font-size: 20px;
    font-weight: bold;
    line-height: 0px;
}
td.empty {
    width: 40%;
    border-bottom: 3px double;
    border-top: 3px double;
    position: relative;
    left: -2px;
}


.information ul {
    text-decoration: none;
    list-style: none;
    padding: 0 6px;
}


.information img {
    max-width: 100%;
}
.information p {
    max-width: 100%;
}
.information ul li {
    color: #000;
    font-size: 15px;
    font-family: sans-serif;
}

.information-box {
    border-bottom: 2px dotted;
    padding: 10px;
    margin: 0 auto;
}
tr.suppiers {
    border-top: 1px solid;
}
.row.suppiers-details {
    padding: 10px;
}
tr.suppiers img {
    width: 50px;
    height: 30px;
    margin: 0 auto;
}
tr.suppiers p {
    width: 50px;
    height: 30px;
    margin: 0 auto;
}

.col-md-12.note {
    border-bottom: 2px dotted;
    border-top: 2px dotted;
    margin: 8px 0;
}

tr.signatures {
    border-bottom: 2px dotted;
}

td.receiver-sign {
    padding-bottom: 36px !important;
}
tr.big-barcode img {
    height: 200px;
    width: 100%;
}

td.date-sign {
    padding-top: 36px !important;
}

.row.footer-invoice {
    margin-top: 20px;
}   
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
 @media print
   {
      .topbar,.side-menu.left{display: none;}
      .content-page {margin-left: 0;
}
   }
</style>
    <body>

        <!-- Loader -->
 
              <?php $this->load->view('barcode/BarcodeBase');?>
			  <?php $this->load->view('barcode/Code128');?>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php //$this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php //$this->load->view('headerfile/leftmenu');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">       
               <iframe src="https://www.easfone.in/saf/sandeep/assets/images/upload_docket/<?php echo $_REQUEST['path'];?>" style="" width="100%" height="800px" allowfullscreen="" 
			   webkitallowfullscreen=""></iframe>                   
                                  
                                  
                       

                            </div>

                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                 </div> <!-- content -->

             <?php $this->load->view('headerfile/footer');?>
            </div>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
      <script src="
     https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/footable.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/assets/js/detect.js')?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/plugins2/parsleyjs/parsley.min.js')?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

 
    </body>
</html>






















