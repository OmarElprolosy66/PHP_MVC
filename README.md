# PHP MVC Framework

A lightweight MVC framework built with PHP to facilitate web application development.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Features
- Simple and lightweight
- Easy to understand and extend
- Follows MVC architecture
- Supports basic routing
- Template engine integration
- PDO wrapper for database interactions

## Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/OmarElprolosy66/PHP_MVC.git
    ```
2. **Navigate to the project directory:**
    ```sh
    cd PHP_MVC
    ```
3. **Install dependencies using Composer:**
    ```sh
    composer install
    ```
4. **Install the PDO wrapper using Composer:**
    ```sh
    composer require dcblogdev/pdo-wrapper
    ```
5. **Set up your environment:**
    - Rename `.env.example` to `.env` and configure your environment variables.

6. **Set up your web server:**
    - Configure your web server's document root to the `public` directory of the project.

## Usage

1. **Run the application:**
    - If using a built-in PHP server:
    ```sh
    php -S localhost:8000 -t public
    ```
2. **Access the application:**
    - Open your browser and navigate to `http://localhost:8000`.

## Project Structure

```plaintext
├── app
│   ├── Controllers
│   ├── Models
│   ├── Views
│   ├── Core
│   └── init.php
├── public
│   ├── index.php
│   ├── .htaccess
│   └── assets
├── vendor
├── .env.example
├── composer.json
├── README.md
```

- `app/Controllers` - Contains controller classes.
- `app/Models` - Contains model classes.
- `app/Views` - Contains view files.
- `app/Core` - Contains core classes for the framework.
- `public/` - Publicly accessible files, including `index.php` and `.htaccess`.
- `vendor/` - Composer dependencies.
- `.env.example` - Example environment configuration.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.