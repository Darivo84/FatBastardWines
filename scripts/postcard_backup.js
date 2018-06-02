// var $basePath = 'http://www.fatbastardwine.co.za/';
  // var $basePath = 'http://demo.designguru.co.za/fatbastard/web/v11/';
  var $basePath = 'http://192.168.0.100/Fat%20Bastard%20Wine/006%20-%20Development/02%20-%20Web%20(Dev)/';
$(document).ready(function() {
    var userHeading;
    $('.user-heading-input').keyup(function(event) {
        userHeading = $('.user-heading-input').val();
        var keycode = (event.keyCode ? event.keyCode : event.which);
        $('.user-heading').text(userHeading);
        event.preventDefault();
    });
    var userBodyCopy;
    $('.body-copy-input').keyup(function(event) {
        userBodyCopy = $('.body-copy-input').val();
        $('.user-copy p').text(userBodyCopy);
        event.preventDefault();
    });
    $('.user-heading-input').keyup(function(event) {
        var limit = "22";
        $('.user-heading-input').val(
            $(this).val().substring(0, limit)
        );
    });
    $('.body-copy-input').keyup(function(event) {
        var limit = "170";
        $('.body-copy-input').val(
            $(this).val().substring(0, limit)
        );
    });
    $('.body-copy-input').bind('keyup', function(e) {
        var data = $('.body-copy-input').val();
        if (event.keyCode == 13) {
            $('.user-copy').html(data.replace(/\n/g, "<br />"));
        }
    });
    //postcard selector
    var postcardSelector;
    $('.postcard-eg').click(function(event) {

        postcardSelector = $(this).attr('id');
        // var userSelection = '';
        var postcards = $basePath + 'pages/postcards/one.php';
        switch (postcardSelector) {
            case '1':
                console.log('1');
                postcards = $basePath + 'pages/postcards/one.php';
                 $('.user-heading-input').attr("placeholder", "Happy Anniversary");
                 $('.left-color').css('background-color', '#820048');
                $('.right-color').css('background-color', '#820048');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                      alert();
                });

                break;
            case '2':
                console.log('2');
                postcards = $basePath + 'pages/postcards/two.php';
                 $('.user-heading-input').attr("placeholder", "Happy Mother's Day");

                   $('.left-color').css('background-color', '#78365A');
                $('.right-color').css('background-color', '#CCA1AA');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                    alert(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                });
                break;
            case '3':
                console.log('3');
                postcards = $basePath + 'pages/postcards/three.php';
                 $('.user-heading-input').attr("placeholder", "Congrats");

                                $('.left-color').css('background-color', '#820048');
                $('.right-color').css('background-color', '#5B2B81');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                });
                break;
            case '4':
                console.log('4');
                postcards = $basePath + 'pages/postcards/four.php';
                 $('.user-heading-input').attr("placeholder", "Happy Birthday");

                  $('.left-color').css('background-color', '#016A70');
                $('.right-color').css('background-color', '#E4B43A');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                });
                break;
            case '5':
                console.log('5');
                postcards = $basePath + 'pages/postcards/five.php';
                 $('.user-heading-input').attr("placeholder", "Happy Father's Day");

                      $('.left-color').css('background-color', '#5B2B81');
                $('.right-color').css('background-color', '#016A70');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                });
                break;
            case '6':
                console.log('6');
                postcards = $basePath + 'pages/postcards/six.php';
                 $('.user-heading-input').attr("placeholder", "Thank You");

                                $('.left-color').css('background-color', '#5B2B81');
                $('.right-color').css('background-color', '#673490');

                $.get(postcards, function(data) {
                    $('#postcard').html(data);
                });
                $.get(postcards, function(data) {
                    $('#postcard-mobile').html(data);
                });
                break;
            default:
                console.log('please select a value');
        }
        return postcardSelector;
    });
    $('#occasion-next').click(function() {
        if (postcardSelector !== undefined) {
            $('#occasion').removeClass('active');
            $('.live-large-nav').removeClass('active');
            $('.occasion-nav').addClass('yellow');
            $('.design-nav').addClass('active');
            $('#design').addClass('active');
        } else {
            $('.occassion-heading').css('color', '#EAB330');
        }
    });

    $('#occasion-back').click(function() {
            $('#occasion').removeClass('active');
            $('.live-large-nav').removeClass('active');
            $('.occasion-nav').addClass('yellow');
            $('.details-nav').addClass('active');
            $('#details').addClass('active');
    });


    $('#occasion-next-mobile').click(function() {
        if (postcardSelector !== undefined) {
        $('.live-large-content').hide();
        $('.design').show();
        } else {
            $('.occassion-heading').css('color', '#EAB330');
        }
    });

    $('.lightbox').fancybox({
        'height': '700',
        'width': '700',
        'opacity': true
    });
    //downloading

    ///tweeting
    // We bind a new event to our link
    
});