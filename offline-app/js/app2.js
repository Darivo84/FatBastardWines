/**
 * @file The main logic for the Todo List App.
 * @author Matt West <matt.west@kojilabs.com>
 * @license MIT {@link http://opensource.org/licenses/MIT}.
 */


window.onload = function() {

  // Display the todo items.
  todoDB.open(refreshTodos);

  // Get references to the form elements.
  var newTodoForm = document.getElementById('competition_form');
  // var newTodoInput = document.getElementById('new-todo');
console.log(newTodoForm);
  // Handle new todo item form submissions.
  if (newTodoForm) {

  newTodoForm.onsubmit = function(e) {
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
        user_birth: {
          required: true,
          number: true,
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
      var name = document.getElementById('user_name'),
        surname = document.getElementById('user_surname'),
        email = document.getElementById('user_email'),
        tel = document.getElementById('user_tel'),
        year = document.getElementById('yeardropdown'),
        month = document.getElementById('monthdropdown'),
        day = document.getElementById('daydropdown'),
        location = document.getElementById('user_location'),
        news = document.getElementById('squaredTwo-conditions'),
        age = 18,
        mydate = new Date();

      mydate.setFullYear(year, month - 1, day);
      var currdate = new Date();
      currdate.setFullYear(currdate.getFullYear() - age);


     if ($('#competition_form').valid()) {
          dateOfBirth = day.value + "/" + month.value + "/" + year.value;

      // Check to make sure the text is not blank (or just spaces).
        // Create the todo item.
        todoDB.createTodo(name.value, surname.value, email.value, tel.value, dateOfBirth, location.value, news.value, function(todo) {
          refreshTodos();
        });

      // Reset the input field.
        $('#user_name').val('');
        $('#user_surname').val('');
        $('#user_email').val('');
        $('#user_tel').val('');
        $('#yeardropdown').val('');
        $('#monthdropdown').val('');
        $('#daydropdown').val('');
        $('#user_location').val('');
        $('#squaredTwo-conditions').val('');
      console.dir(name);
    } else {
      $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertBefore("user_conditions-error");
      $("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
      $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
    }
    // Don't send the form.
    return false;
  };

}
};

// Update the list of todo items.
function refreshTodos() {
  todoDB.fetchTodos(function(todos) {
    var todoList = document.getElementById('todo-items');
    // var todoList = document.getElementBy;
    if (todoList) {

    todoList.innerHTML = '';

    for(var i = 0; i < todos.length; i++) {
      // Read the todo items backwards (most recent first).
      var todo = todos[(todos.length - 1 - i)];

      json = "'user': [";
      json += "{'name'" + ":" + "'" + todo.name  + "'}," + "\n";
      json += "{'surname'" + ":" + "'" + todo.surname  + "'}," + "\n";
      json += "{'email'" + ":" + "'" + todo.email  + "'}," + "\n";
      json += "{'tel'" + ":" + "'" + todo.tel  + "'}," + "\n";
      json += "{'date_of_birth'" + ":" + "'" + todo.date_of_birth  + "'}," + "\n";
      json += "{'location'" + ":" + "'" + todo.location  + "'}," + "\n";
      // json += "{'answer'" + ":" + "'" + todo.answer  + "'}," + "\n";
      json += "{'subscribe'" + ":" + "'" + todo.subscribe  + "'}";
      json +=  "],";

      todoList.innerHTML += json;
    }
    var list = todoList.innerHTML;
    $('textarea').text(list);
    }
  });
}
