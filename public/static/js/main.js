/*
 * Copyright (C) 2017 Snopboy <http://forum.ragezone.com/members/1333372200.html>
 *
 * This program is a non-free PAID software and may not be used and / or
 * distributed without valid license and written approval by the original author.
 * See the Software License for more details.
 *
 * You should have received a copy of the License
 * along with this program.  If not, see
 * <https://www.binpress.com/license/view/l/4fb8be2be60a2357a96b0bfd469bb7aa/>.
 */


/**
 * Main JavaScript File
 * All Your Functions Should Go Here
 */

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
$(function() {
    $('[data-toggle="buttons"]').button('toggle')
});
$('.carousel').carousel({
    interval: 5000
})


$('a:has(span)').hover(function() {
    $('span', this).stop().animate({ "opacity": 1 });
}, function() {
    $('span', this).stop().animate({ "opacity": 0 });
});


$('#username')
    .on('focus', function() {
        if ($(this).val() == 'USERNAME') {
            $(this).val('');
        }
    })
    .on('blur', function() {
        if ($(this).val() == '') {
            $(this).val('USERNAME');
        }
    });


$('#nopassword')
    .on('focus', function() {
        $(this).hide();
        $('#password').show();
        $('#password').focus();
    });


$('#password')
    .on('blur', function() {
        if ($(this).val() == '') {
            $(this).hide();
            $('#nopassword').show();
        }
    });
/*
$("#password[type='text']").on('focus', function() {
    $("#password[type='text']").clone(true).attr('type', 'password').val('').insertAfter('#username');
    $("#password[type='text']").remove();
    $("#password[type='password']").focus();
});*/
/*$("#password[type='password']").on('blur', function() {
    $("#password[type='password']").clone(true).prop('type', 'text').val('PASSWORD').insertAfter('#username');
    $("#password[type='password']").remove();
    $("#password[type='text']").focusout();
});*/
/*
$(document).mouseup(function(e) {
    var container = $("#password[type='password']");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        //container.hide();
        $("#password[type='password']").clone(true).prop('type', 'text').val('PASSWORD').insertAfter('#username');
        $("#password[type='password']").remove();
    }
});*/

/*$('#password').focus().clone(true, true).prop('type', 'password').prop('value', '').insertAfter('#password').prev().remove();*/
/*$('#password').blur().clone(true, true).prop('type', 'text').prop('value', 'PASSWORD').insertAfter('#password').prev().remove();*/

// DEPRECATED
/*jQuery(document).ready(function($) {

    // More options available at
    // https://www.jssor.com/development/reference-options.html
    var options = {
        $AutoPlay: true,
        $Idle: 5000
    };

    var jssor_slider1 = new $JssorSlider$('slider1_container', options);
});*/