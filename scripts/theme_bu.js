$(document).ready(function($) {
    $(".read-more").click(function(e) {
        var txt = $(".mobile-hide-read-more").is(':visible') ? 'Read More' : 'Read Less';
        $(".read-more").text(txt);
        $(".mobile-hide-read-more").slideToggle(200);
        e.preventDefault();
    });
    $('.nav-tabs a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('.postcard-eg').click(function() {
        $('.postcard-eg').removeClass('active');
        $(this).addClass('active');
    });
    $('.wine-fancy').fancybox({
        scrolling: 'no',
        helpers: {
            overlay: {
                locked: true
            }
        }
    });

    
    
    $('.wine-container').hover(function() {
        $(this).find('.wine-hover-border').fadeIn('400');
    }, function() {
        $(this).find('.wine-hover-border').fadeOut('100');
    });
    $("#mobile-menu").mobileMenu({
        MenuWidth: 250,
        SlideSpeed: 300,
        WindowsMaxWidth: 959,
        PagePush: false,
        FromLeft: true,
        Overlay: true,
        CollapseMenu: true,
        ClassName: "mobile-menu"
    });
    $('.left-color').click(function(event) {
        $('.picker-left-panel').show();
        $('.color-left-text').hide();
    });
    $('.right-color').click(function(event) {
        $('.picker-right-panel').show();
        $('.color-right-text').hide();
    });
    $('.picker-left-panel').click(function(event) {
        $(this).hide(10);
        $('.color-left-text').show();
    });
    $('.picker-right-panel').click(function(event) {
        $(this).hide(10);
        $('.color-right-text').show();
    });
    $(".leftColor").ImageColorPicker({
        afterColorSelected: function(event, color) {
            $('.left-color').css('background-color', color);
            $('.postcard-design .left').css('background-color', color);
        }
    });
    $(".rightColor").ImageColorPicker({
        afterColorSelected: function(event, color) {
            $('.right-color').css('background-color', color);
            $('.postcard-design .right').css('background-color', color);
        }
    });
    $('.header-nav a').click(function(event) {
        $('.header-nav a').removeClass('active');
        $(this).addClass('active');
    });
    $(".ara").on('click', function() {
        var day = $("#daydropdown").val();
        var month = $("#monthdropdown").val();
        var year = $("#yeardropdown").val();
        var userLocation = $("#user_location").val();
        var age = 18;
        var mydate = new Date();
        mydate.setFullYear(year, month - 1, day);
        var currdate = new Date();
        currdate.setFullYear(currdate.getFullYear() - age);
        if (userLocation === undefined || userLocation === "") {
            $(".validation").text("please select a location");
            $('select').click(function(event) {
                $('.validation').text("");
                $('.error').fadeOut();
            });
        } else if (day === undefined || day === "") {
            $(".validation").text("please select a day");
            $('select').click(function(event) {
                $('.validation').text("");
                $('.error').fadeOut();
            });
        } else if (month === undefined || month === "") {
            $(".validation").text("please select a month");
            $('select').click(function(event) {
                $('.validation').text("");
                $('.error').fadeOut();
            });
        } else if (year === undefined || year === "") {
            $(".validation").text("please select a year");
            $('select').click(function(event) {
                $('.validation').text("");
                $('.error').fadeOut();
            });
        } else if ((currdate - mydate) < 0) {
            $('.error').show();
            $('select').click(function(event) {
                $('.validation').text("");
                $('.error').fadeOut();
            });
            // return false;
        } else {
            $.cookie('is_legal', 'yes', {
                expires: 1,
                path: '/'
            });
            window.location = 'index.php';
            $('#ara').hide('fast');
            smoothScroll.animateScroll(null, '#Top');
        }

    });


    $('#contactform').validate();

});