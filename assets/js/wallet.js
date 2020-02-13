$(document).ready(function() {
    $("#r1").click(function() {
        ddd = "debit";
        $("#al").load('get_data.php', {"debit": ddd});
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