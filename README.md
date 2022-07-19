Simple User Management system using Laravel MVC

Hosted on heroku: http://powerful-atoll-91326.herokuapp.com/users

Controller
UserController with the following methods
index
create
show
store
edit
destroy
getUsers

Model
User: contains the following fields
Id
Name
Email
phone

Views
Contains Users folder which contains the following:
index.blade.php: this is the view to display all users from the getUsers method of the user controller
editUser.blade.php: this view displays a form with current user info and possibility to edit, then a submit button
createUser.blade.php: this view displays a form to accept new user info and a submit button
 
Database
okiemutemariere

Table
users
