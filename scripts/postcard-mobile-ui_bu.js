    //mobile ui
    $('#create-next-mobile').click(function(event) {
        $('.live-large-content').hide();
        $('.details').show();
        // smoothScroll.animateScroll(null, '#details-mobile');
    });



    // $('#livelargeformmobile').validate();
    // $('#details-next-mobile').click(function(){
    //         // $('#livelargeformmobile').validate();
    //         // if($('#livelargeformmobile').valid()) // check if form is valid
    //         // {
    //             // e.preventDefault();
    //     $('.live-large-content').hide();
    //     $('.occasion').show();
    //         // }
    //         // else{
    //         // }
    // });



    $('#details-next-mobile').click(function(e){
        // alert('click works');
        e.preventDefault();
        $('#livelargeformmobile').validate({
            rules: {
                user_name:{
                    required: true,
                    minlength: 2,
                },
                user_surname:{
                    required: true,
                    minlength: 2,
                },
                user_tel:{
                    required: true,
                    number: true,
                    minlength: 10,
                },
                user_email:{
                    required: true,
                    email: true,
                },
                user_message:{
                    required: true,
                    minlength: 10,
                },
                user_location: 'required',
            },
            submitHandler: function(form) {
                form.submit();
            }

        });

        if($('#livelargeformmobile').valid()) // check if form is valid
        {   

            //alert('form is valid');
            e.preventDefault();
            $('.live-large-content').hide();
            $('.occasion').show();


            // $('#details').removeClass('active');
            // $('.live-large-nav').removeClass('active');
            // $('.details-nav').addClass('yellow');
            // $('.occasion-nav').addClass('active');
            // $('#occasion').addClass('active');
            //event.preventDefault();

        }
        else
        {
           $( "<label for='squaredTwo-conditions-mobile' id='squaredTwo-conditions-label'></label>" ).insertBefore( "user_conditions-error" );
           $("#squaredTwo-conditions-mobile").after("<label for='squaredTwo-conditions-mobile' id='squaredTwo-conditions-label'></label>");
           $("<label for='squaredTwo-conditions-mobile' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions-mobile");
            //alert('Please complete form');

            //alert('please complete the form');
            e.preventDefault();
        }
    });

    $('#occasion-next-mobile').click(function(event) {
        $('.live-large-content').hide();
        $('.design').show();
        // smoothScroll.animateScroll(null, '#design-mobile');
    });



$('.design-next-mobile').click(function(event) {
        $('#postcard-share-mobile').empty();
        html2canvas($('#postcard-mobile'), {
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
                    url: 'mobile_save.php',
                    data: { img_val: img_val} ,//'img_val='+img_val,
                    success: function(data) {   
                       // alert(data);
                        $('.left-right').html(data);
                    }
                });
                postcardFinal.src = img_val;

                /*$('#postcard-share-mobile').append(postcardFinal);*/
                // $('#postcard-share-mobile').append(postcardFinal);
            }
        });
        $('.live-large-content').hide();
        $('.share').show();
        $('.section-header').addClass('visited');
        $('.visited').click(function(event) {
            $('.live-large-content').hide();
            $(this).next('.live-large-content').show();
        });
    });
























