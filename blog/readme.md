# Simple Blog Project

This project is a simple blog platform developed using PHP native, CSS, and MySQL.
It focuses on demonstrating the basic concepts of PHP,
including basic syntax, variables, control structures,
functions, arrays, strings, and superglobals.

## Features

- Creating, editing, and deleting blog posts
- Displaying blog posts on the homepage

## Technologies Used

- **PHP**: For server-side scripting and handling backend logic.
- **CSS**: For styling the frontend.
- **MySQL**: For storing user data, blog posts, and comments.

## Prerequisites

- **PHP**: Make sure PHP is installed on your system.
- **MySQL**: Make sure MySQL is installed and running on your system.
- **Web Server**: You can use Apache or any other web server of your choice.

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/MahmoudShawqatYo/PHP-Projects.git
    ```

2. **Navigate to the project directory**:
    ```sh
    cd simple-blog-project
    ```

3. **Create a MySQL database**:
    ```sql
    CREATE DATABASE simple_blog;
    ```

4. **Import the database schema**:
    ```sh
    mysql -u your_username -p simple_blog < simple_blog.sql
    ```

5. **Update the database configuration**:
    - Open `includes/db.php` and update the database connection details.
    ```php
    <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'your_username');
    define('DB_PASSWORD', 'your_password');
    define('DB_NAME', 'simple_blog');

    function connect() {
        $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        return $connection;
    }
    ?>
    ```

6. **Run the project**:
    - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Open your web browser and navigate to `http://localhost/php-projects/blog`.

## Project Structure

```sh
simple-blog-project/
├── includes/
│   ├── db.php
│   ├── header.php
│   └── data.php
├── index.php
├── style.css
├── posts.php
├── create.php
├── edit.php
├── delete.php
├── simple_blog.sql

