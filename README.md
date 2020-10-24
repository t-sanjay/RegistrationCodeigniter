# Registration Codeigniter
Simple Login and Registration form using CodeIgniter and Bootstrap
This project consists of the following pages:
1. Login Page (which is the index page)</br>
     The controller, model and view for the page are Welcome(index function), Authmodel(checkUser function) and welcome_message respectively.</br>
2. Registration Form</br>
  The controller, model and view for the page are Auth(register function), Authmodel(create function) and register respectively.</br>
3. Dashboard</br>
  The controller, model and view for the page are Welcome(logout and dashboard function), Authmodel(authorize function used to check the session data) and dashboard respectively.
</br>

The database used is MySQL </br>

The database name is codeigniter and the table name is users.
The column names of the table are:</br>
1.id (primary key AI)</br>
2. fname </br>
3. lname</br>
4. email</br>
5. phnum(phone number)</br>
6. pass( for password)</br>
7.created_at( registration date and time)</br>
8. updated_at ( password update date and time ) // change password function not yet created.
