$(document).ready(function() {
  var actionValue;
  actionValue = $('#action').val();
  if (actionValue === "") {
    $('#contact-button').click(function(e) {
      e.preventDefault();
      $('#competition_form').validate({
        rules: {
          user_name: {
            required: true,
            minlength: 2
          },
          user_surname: {
            required: true,
            minlength: 2
          },
          user_email: {
            required: true,
            email: true
          },
          user_tel: {
            required: true,
            number: true,
            minlength: 10
          },
          birth_year: {
            required: true,
            number: true
          },
          user_age: {
            required: true
          },
          user_location: {
            required: true
          },
          user_answer: {
            required: true
          }
        },
        submitHandler: function(form) {
        }
      });

        // alert('button click');
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
            $('.error-date').fadeOut();
          });
        } else if (day === undefined || day === "") {
          $(".validation").text("please select a day");
          $('select').click(function(event) {
            $('.validation').text("");
            $('.error-date').fadeOut();
          });
        } else if (month === undefined || month === "") {
          $(".validation").text("please select a month");
          $('select').click(function(event) {
            $('.validation').text("");
            $('.error-date').fadeOut();
          });
        } else if (year === undefined || year === "") {
          $(".validation").text("please select a year");
          $('select').click(function(event) {
            $('.validation').text("");
            $('.error-date').fadeOut();
          });
        } else if ((currdate - mydate) < 0) {
          $('.error-date').show();
          $('select').click(function(event) {
            $('.validation').text("");
            $('.error-date').fadeOut();
          });
        } else{
          var dobValid = true;
        }
      if ($('#competition_form').valid() && dobValid) {
        $.ajax({
          type: "POST",
          url: "processing/competition_form_save.php",
          data: $('#competition_form').serialize(),
          success: function(data) {
              console.log("was submitted");

          }
        });
        $('#success').text('Thanks. We’re thrilled to welcome you to our pod of FAT bastards and will announce the winner on 7 October 2015 date.');
        setTimeout(function() {
          $('#success').text('');
        }, 8000);
        setTimeout(function() {
          window.location.href = 'competition_signup.php';
        }, 8000);
      } else {
        $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertBefore("user_conditions-error");
        $("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
        $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
      }
    });
  }
});
