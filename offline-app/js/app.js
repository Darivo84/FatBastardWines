window.onload = function() {
  // terms and conditions lightbox
  $('#open_terms').click(function() {
    $('#terms').fadeIn();
  });

  $('#terms-close').click(function() {
    $('#terms').fadeOut();
  });

  // Display the todo items.
  todoDB.open(refreshTodos);

  // Get references to the form elements.
  var newTodoForm = document.getElementById('competition_form');

  // Handle new todo item form submissions.
  if (newTodoForm) {

    // add functionality to checkbox
    var conditionsBox = document.getElementById("squaredTwo-age");
    var ageBox = document.getElementById("squaredTwo-conditions");

    // Terms and conditions
    $("#squaredTwo-age").click(function() {
      if (conditionsBox.value === "1") {
        conditionsBox.value = "0";
        $("#squaredTwo-age").attr('checked', false);
      } else if (conditionsBox.value === "0") {
        conditionsBox.value = "1";
        $("#squaredTwo-age").attr('checked', true);
      }
    });

    // news!!
    $("#squaredTwo-conditions").click(function() {
      if (ageBox.value === "1") {
        ageBox.value = "0";
        $("#squaredTwo-conditions").attr('checked', false);
      } else if (ageBox.value === "0") {
        ageBox.value = "1";
        $("#squaredTwo-conditions").attr('checked', true);
      }
    });


    newTodoForm.onsubmit = function(e) {
      e.preventDefault();

      //grab the values
      var name = document.getElementById('user_name').value,
        surname = document.getElementById('user_surname').value,
        email = document.getElementById('user_email').value,
        tel = document.getElementById('user_tel').value,
        year = document.getElementById('yeardropdown').value,
        month = document.getElementById('monthdropdown').value,
        day = document.getElementById('daydropdown').value,
        location = document.getElementById('user_location').value,
        news = document.getElementById('squaredTwo-conditions').value,
        tandc = document.getElementById('squaredTwo-age').value,
        age = 18,
        //check age agains date
        mydate = new Date();
      mydate.setFullYear(year, month - 1, day);
      var currdate = new Date();
      currdate.setFullYear(currdate.getFullYear() - age);
      // Create a timestamp for the todo item.
      var timestamp = new Date();
      timestamp = timestamp.toString();

      console.log(news);
      // regex validate email
      function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
      }
      // save email validation result to boolean value
      var validEmail = validateEmail(email);

      // validate phone
      function validateContact(tel) {
        if (tel.length !== 10) {
          return false;
        } else {
          return true;
        }
      }

      // save phone validation result to boolean value
      var validContact = validateContact(tel);

      // displays message if field invalid
      function valid(message) {
        $(".validation").text(message);
        setTimeout(function() {
          $(".validation").text("");
        }, 2000);
      }

      // check the fields (ideally this should be a case not elseif)
      if (name === undefined || name === "") {
        valid("please fill out your name");
        } else if (surname === undefined || surname === "") {
          valid("please fill out your surname");
        } else if (email === undefined || email === "" || validEmail === false) {
          valid("please provide in a valid email address");
        } else if (email === undefined || email === "" || validContact === false) {
          valid("please provide in a valid contact number");
        } else if (year === undefined || year === "") {
          valid("please select a year");
        } else if (month === undefined || month === "") {
          valid("please select a month");
        } else if (day === undefined || day === "") {
          valid("please select a day");
        } else if (location === undefined || location === "") {
          valid("please select a location");
        } else if ((currdate - mydate) < age) {
          valid("Oops, it seems that’s not enough for a FAT bastard. Please check your details and try again.");
        } else if (conditionsBox.value !== "1") {
          valid("please accept the terms and conditions");
      } else {

        // format date of birth for sumission
        dateOfBirth = day + "/" + month + "/" + year;

        // Create the todo item.
        todoDB.createTodo(name, surname, email, tel, dateOfBirth, location, news, timestamp, function(todo) {
          refreshTodos();
        });

        // show the success message
        $('#success').fadeIn('fast');
        setTimeout(function() {
          $('#success').css('display', 'none');
        }, 6000);

        // Reset the input field.
        $('#user_name').val('');
        $('#user_surname').val('');
        $('#user_email').val('');
        $('#user_tel').val('');
        $('#yeardropdown').val('');
        $('#monthdropdown').val('');
        $('#daydropdown').val('');
        $('#user_location').val('');
        $(".validation").text('');
        $("#squaredTwo-age").attr('checked', false);
        if (news == 0) {
          console.log('here');
          $('#squaredTwo-conditions').trigger('click');
        }
        // Don't send the form.
        return false;
      }
    };
  }


  $('#delete').click(function() {
    indexedDB.deleteDatabase('todos');
    $('#form-messages').text('YOUR DATABASE HAS BEEN DELETED');
    setTimeout(function() {
      window.location.href = 'http://fatbastardwine.co.za/offline-app/';
    }, 2000);
  });

  // Update the list of todo items.
  function refreshTodos() {
    todoDB.fetchTodos(function(todos) {
      var todoList = document.getElementById('todo-items');
      // var todoList = document.getElementBy;
      if (todoList) {

        todoList.innerHTML = '';

        for (var i = 0; i < todos.length; i++) {
          // Read the todo items backwards (most recent first).
          var todo = todos[(todos.length - 1 - i)];
          // format data for submission on the view page
          json = '';
          json += '{"name"' + ':' + '"' + todo.name + '",' + '\n';
          json += '"surname"' + ':' + '"' + todo.surname + '",' + '\n';
          json += '"email"' + ':' + '"' + todo.email + '",' + '\n';
          json += '"tel"' + ':' + '"' + todo.tel + '",' + '\n';
          json += '"date_of_birth"' + ':' + '"' + todo.date_of_birth + '",' + '\n';
          json += '"location"' + ':' + '"' + todo.location + '",' + '\n';
          json += '"subscribe"' + ':' + '"' + todo.subscribe + '"';
          json += '"time_stamp"' + ':' + '"' + todo.timestamp + '"';
          json += "},";
          // add to json variable
          todoList.innerHTML += json;
        }

        // insert into form
        $('textarea').text("[" + todoList.innerHTML + "]");
      }
    });
  }
};
