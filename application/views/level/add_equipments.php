<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/left-sidebar'); ?>
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col">
          <div class="page-header-left">
            <h3>Add Equipment</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('User/dashboard') ?>"><i data-feather="home"></i></a></li>
            </ol>
          </div>
        </div>
        <!-- Bookmark Start-->
        <div class="col">
          <div class="bookmark pull-right">
            <ul>
              <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Scroll Down" onclick="myFunctionq()" value="Scroll down"><i data-feather="chevrons-down"></i></a></li>
              <li><a href="javascript:window.print()" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Print"><i data-feather="printer"></i></a></li>
              <li><a href="<?php echo base_url('User/import_equipment_csv'); ?>" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Fil Export"><i data-feather="file-text"></i></a></li>
              <li><a href="#"><i class="bookmark-search" data-feather="search"></i></a>
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
  
  <div class="container-fluid">
    <div class="card">
      <form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_equipment') ?>">
        <div class="card-body">
        <?php if ($this->session->flashdata('message')) {
        echo '<div class="alert alert-success dark alert-dismissible fade show" role="alert"><i class="icon-thumb-up"></i><b> Well done! </b>' .$this->session->flashdata('message').
        '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
      } ?>
      <?php if ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i class="icon-thumb-down"></i><b> Well done! </b>' .$this->session->flashdata('error').
        '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
      } ?>
          <div class="row">
            <?php
            $form_id = 1;

            $result = $this->User_Model->get_form_fieldsddd($form_id, $login_id);
            $result;

            $result2 = $this->User_Model->get_form_fieldss($result);
            foreach ($result2 as $row) {

              if ($row->field_id != 52 && $row->field_id != 53) {
            ?>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label " for="first_name"><?php echo $row->form_label; ?></label>
                    <?php echo $row->movement_form_input_box; ?>
                  </div>
                </div>
              <?php
              } else { ?>

                <div class="form-group pt-3 mt-3 pl-3">
                  <?php echo $row->movement_form_input_box; ?>
                  <label class="control-label " for="first_name"><?php echo $row->form_label; ?></label>
                </div>
            <?php }
            }
            ?>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-pill btn-outline-primary-2x" type="submit" name="submit" value="Submit" title="Submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('form').parsley();
  });
  $(function() {
    $('#demo-form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.alert-info').toggleClass('hidden', !ok);
        $('.alert-warning').toggleClass('hidden', ok);
      })
      .on('form:submit', function() {
        return false; // Don't submit form for this demo
      });
  });

  $('#demo-8').inputpicker({
    data: [
      <?php
      $i = 1;
      $result = $this->User_Model->fetch_trading_partner_supply();
      foreach ($result as $row) {
        $type_id = $row->type_id;
        $ii = $row->supplier_name;
        $remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $tp_name = str_replace($remove, "", $ii);

        //$code=$row->code;
        //$tp_primary=$row->tp_primary;
        //$memberId=$row->memberId;

        echo "{value:'$type_id',text:'$tp_name'},";
        $i++;
      } ?>

    ],
    fields: [{
        name: 'value',
        text: 'TP Id'
      },
      {
        name: 'text',
        text: 'Trading Partner'
      },



    ],
    headShow: true,
    fieldText: 'text',
    fieldValue: 'value',
    filterOpen: true
  });

  function myFunction(data) {
    var data;

    var base_quantity = +document.getElementById("base_quantity").value;
    var unit_movement_fee = +document.getElementById("unit_movement_fee").value;

    var x = base_quantity * unit_movement_fee;

    document.getElementById("movement_fee").value = x;
  }

  function myFunctionq() {

    var divLoc = $('#div1').offset();
    $('html, body').animate({
      scrollTop: divLoc.top
    }, "slow");
    return false
  };
</script>
<?php $this->load->view('layouts/footer'); ?>