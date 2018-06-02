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
  newTodoForm.onsubmit = function() {
    var name = document.getElementById('user_name'),
      surname = document.getElementById('user_surname'),
      email = document.getElementById('user_email'),
      tel = document.getElementById('user_tel');

    // Get the todo text.
    var name = name.value,
        surname = surname.value,
        email = email.value,
        tel = tel.value;
    // Check to make sure the text is not blank (or just spaces).
    if (text.replace(/ /g,'') != '') {
      // Create the todo item.
      todoDB.createTodo(name, surname, email, tel, function(todo) {
        refreshTodos();
      });
    }

    // Reset the input field.
    // newTodoInput.value = '';
    // name.value  = '';
    // surname.value  = '';
    // email.value  = '';
    // tel.value  = '';
    // Don't send the form.
    return false;
  };

}

// Update the list of todo items.
function refreshTodos() {
  todoDB.fetchTodos(function(todos) {
    var todoList = document.getElementById('todo-items');
    todoList.innerHTML = '';

    for(var i = 0; i < todos.length; i++) {
      // Read the todo items backwards (most recent first).
      var todo = todos[(todos.length - 1 - i)];

      var li = document.createElement('li');
      // var checkbox = document.createElement('input');
      // checkbox.type = "checkbox";
      // checkbox.className = "todo-checkbox";
      // checkbox.setAttribute("data-id", todo.timestamp);
      //
      // li.appendChild(checkbox);

      var span = document.createElement('span');
      span.innerHTML =  "&quot;" + todo.name  + "&quot;" + "&quot;" + todo.surname  + "&quot;" + "&quot;" + todo.email  + "&quot;"  + "&quot;" + todo.tel  + "&quot;";

      li.appendChild(span);

      todoList.appendChild(li);

      // Setup an event listener for the checkbox.
      // checkbox.addEventListener('click', function(e) {
      //   var id = parseInt(e.target.getAttribute('data-id'));
      //
      //   todoDB.deleteTodo(id, refreshTodos);
      // });
    }

  });
}
