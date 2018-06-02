$(function() {
  // Get the form.
  var form = $('#ajax-contact');
  var formMessages = $('#form-messages');

  $(form).submit(function(e) {

    e.preventDefault();

    var formData = $(form).serialize();
    console.log(formData);
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
      })
      .done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');

        // Set the message text.
        $(formMessages).text(response);

        // Clear the form.
        $('textarea').val('');

            $('#delete').css('display', 'block');
            $('#send-info').css('display', 'none');
            $('#return').css('display', 'block');
          $('#return').click(function(){
                window.location.href = 'http://fatbastardwine.co.za/offline-app/';
          });
        // }, 800);
      })
      .fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text('Oops! An error occured and your message could not be sent.');
        }
      });
  });

});
