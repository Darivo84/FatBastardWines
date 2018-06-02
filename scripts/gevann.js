$(document).ready(function(){
    $('#details-back').click(function(e){
        e.preventDefault();
              $('#details').removeClass('active');
            $('.live-large-nav').removeClass('active');
            $('.details-nav').addClass('yellow');
            $('.create-nav').addClass('active');
            $('#create').addClass('active');
    });


    $('#details-next').click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processing/insert_details.php',
            data: $('#livelargeform').serialize(),
        });


        $('#livelargeform').validate({
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

        // var day = $("#daydropdown").val();
        // var month = $("#monthdropdown").val();
        // var year = $("#yeardropdown").val();
        // var age = 18;
        // var mydate = new Date();
        // mydate.setFullYear(year, month - 1, day);
        // var currdate = new Date();
        // currdate.setFullYear(currdate.getFullYear() - age);
        // if (year === undefined || year === "") {
        //     $(".validation").text("Please select a year");
        //     $('select').click(function(event) {
        //         $('.validation').text("");
        //         $('.error').fadeOut();
        //     });
      
        // } else if (month === undefined || month === "") {
        //     $(".validation").text("Please select a month");
        //     $('select').click(function(event) {
        //         $('.validation').text("");
        //         $('.error').fadeOut();
        //     });
        // }
        //     else if (day === undefined || day === "") {
        //     $(".validation").text("Please select a day");
        //     $('select').click(function(event) {
        //         $('.validation').text("");
        //         $('.error').fadeOut();
        //     });
        //    } else if ((currdate - mydate) < 0) {
        //     $('.error').show();
        //     $('select').click(function(event) {
        //         $('.validation').text("");
        //         $('.error').fadeOut();
        //     });
        //     // return false;
        // } else 
        if($('#livelargeform').valid()){
            //alert('form is valid');
            // e.preventDefault();
            $('#details').removeClass('active');
            $('.live-large-nav').removeClass('active');
            $('.details-nav').addClass('yellow');
            $('.occasion-nav').addClass('active');
            $('#occasion').addClass('active');
            //event.preventDefault();

        }
        else
        {
           $( "<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>" ).insertBefore( "user_conditions-error" );
           $("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
           $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");

        }


  });

    });
