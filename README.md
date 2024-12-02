Simple MVC Framework for Web Projects<br>
This project showcases a simple yet effective Model-View-Controller (MVC) framework designed for smaller web projects.

The MVC architecture separates the application into three interconnected components<br>
Model - Manages the data and business logic. In this project, the UserModel class interacts with the database to retrieve user data.<br>
View - Handles the presentation layer. The HTML form (loginform.php) is part of the view, displaying the login interface to the user.<br>
Controller - Manages the communication between the model and the view. The LoginController class processes user input, interacts with the model, and updates the view accordingly.

Key Features<br>
Database Connection<br>
The Database class establishes a connection to the MySQL database using the mysqli extension. It includes methods for executing queries and closing the connection.

User Authentication<br>
The UserModel class retrieves user data from the database based on the provided username and password.<br>
The LoginController class processes the login form submission, validates the input, and checks the credentials against the database. If the credentials are correct, the user is redirected to the main page; otherwise, an error message is displayed.

Session Management<br>
Sessions are used to maintain user state across different pages. The LoginController class starts a session and sets session variables to store the logged-in user's information.

Form Handling and Validation<br>
The login form is created using HTML and includes client-side validation with JavaScript to ensure that both the username and password fields are filled out before submission.

Error Handling<br>
Error messages are displayed to the user if the login credentials are incorrect or if any required fields are missing.

Benefits<br>
This framework provides a solid foundation for building web applications with a clear separation of concerns, making your code more maintainable and scalable.<br>
It demonstrates how to implement basic user authentication, session management, and form validation in a structured and organized manner.
