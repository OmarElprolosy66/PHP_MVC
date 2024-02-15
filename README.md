# MVC Framework

MVC Framework is a simple PHP-based Model-View-Controller (MVC) framework for building web applications. It provides a structured approach to organizing code, separating concerns, and enhancing maintainability.

## Features

- MVC architecture for organizing code into models, views, and controllers.
- Database integration using PDO Wrapper for MySQL database.
- User authentication and session management.
- View rendering and redirection utilities.
- Easy routing system for defining routes and handling requests.
- File upload handling for managing user uploads.

## Directory Structure

The directory structure of the MVC Framework is as follows:

- **app**: Contains the core application files.
  - **config**: Configuration files, including database configurations.
  - **controllers**: Controllers for handling requests and business logic.
  - **core**: Core framework classes and utilities.
  - **models**: Model classes for interacting with the database.
  - **views**: View files for rendering HTML content.
- **public**: Publicly accessible files, including front-end assets and entry point (`index.php`).

## Usage

1. Define routes in the `public/index.php` file to map URLs to controller methods.
2. Create controller classes in the `app/controllers` directory to handle different parts of your application.
3. Define model classes in the `app/models` directory to interact with the database.
4. Create view files in the `app/views` directory to render HTML content.
5. Use session management and user authentication utilities provided by the `Session` class.
6. Customize the application by extending core classes and adding additional functionality as needed.

## Contributing

Contributions to the MVC Framework are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request on GitHub.

## License

The MVC Framework is open-source software licensed under the [MIT license](LICENSE).
