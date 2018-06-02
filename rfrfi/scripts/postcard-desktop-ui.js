    //desktop ui
$(document).ready(function(){
        $('#create-next').click(function(e) {
            e.preventDefault();
            $('#create').removeClass('active');
            $('.live-large-nav').removeClass('active');
            $('.create-nav').addClass('yellow');
            $('.details-nav').addClass('active');
            $('#details').addClass('active');
        });

$('#design-back').click(function(event) {
    $('#design').removeClass('active');
    $('.live-large-nav').removeClass('active');
    $('.design-nav').addClass('yellow');
    $('.share-nav').addClass('yellow');
    $('.occasion-nav').addClass('active');
    $('#occasion').addClass('active');
 
});


$('.design-next').click(function(event) {
    $('#postcard-share').empty();
    html2canvas($('#postcard'), {
        onrendered: function(canvas) {
            var postcardBase64 = canvas.toDataURL();
            var postcardFinal = new Image();
            postcardFinal.src = postcardBase64;

            $('#img_val').val(canvas.toDataURL("image/png"));
            img_val = $('#img_val').val();
            imgString = 'img_val='+img_val+'';
            // $.post( "save.php", { img_val: img_val} );
            //$('.tab-content').load('save.php?img_val='+img_val);
            $.ajax({
                type: 'POST',
                url: 'save.php',
                data: { img_val: img_val} ,//'img_val='+img_val,
                success: function(data) {   
                   // alert(data);
                    //$('.tab-content').html(data);
                    $('.user_share').html(data);
                }
            });
            postcardFinal.src = img_val;
            // $('#postcard-share').append(postcardFinal);
            $('img[src="data:,"]').css("display","none");
        }
    });


    $('#design').removeClass('active');
    $('.live-large-nav').removeClass('active');
    $('.design-nav').addClass('yellow');
    $('.share-nav').addClass('yellow');
    $('.share-nav').addClass('active');
    $('#share').addClass('active');
    $('.share-nav').css({
        'width': '196px',
        'box-shadow': '0px 2px 4px rgba(208, 208, 208, 1)',
        'margin': '0'
    });
    $('.live-large-nav a').addClass('amazing');
    $('.live-large-nav a').css('cursor', 'pointer');
    $('.live-large-nav a').css('pointer-events', 'auto');
    $('.live-large-nav a').attr('data-toggle', 'tab');
    });



$('#share-back').click(function(event) {
    $('#share').removeClass('active');
    $('.live-large-nav').removeClass('active');
    $('.share-nav').addClass('yellow');
    $('.share-nav').addClass('yellow');
    $('.design-nav').addClass('active');
    $('#design').addClass('active');
 
});

});

