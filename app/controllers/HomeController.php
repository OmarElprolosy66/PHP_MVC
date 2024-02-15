<?php

declare(strict_types=1);

namespace MVC\Controllers;

use MVC\Core\Helpers;
use MVC\Models\User;
use MVC\Core\Session;
use MVC\Core\Controller;
use Respect\Validation\Validator as V;

/**
 * Class HomeController
 * @package MVC\Controllers
 */
class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        Session::start();
    }

    /**
     * Display the home page.
     */
    public function index(): void
    {
        // Fetch all users from the database
        $user = new User();
        $data = $user->getAllUsers();

        // Render the home page view with the user data
        $this->view("home/index.php", ["title" => "Home index", "data" => $data]);
    }

    /**
     * Display login form.
     */
    public function login(): void
    {
        $this->view("home/login.php", ["title" => "Login"]);
    }

    /**
     * Logout user.
     */
    public function logout(): void
    {
        Session::destroy();
        Helpers::redirect("home/login");
    }

    /**
     * Handle user login.
     */
    public function postLogin(): void
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $emailValidator = v::email()->notEmpty();
        $passwordValidator = v::stringType()->length(3)->notEmpty();

        if ($emailValidator->validate($email) && $passwordValidator->validate($password)) {
            $user = new User();
            $data = $user->getUser($email, $password);

            if ($data !== false) {
                // User exists in the database
                Session::set("user", $data);
                Helpers::redirect("user/index");
                exit();
            } else {
                // User not found in the database
                echo "User not found.";
            }
        } else {
            // Validation failed
            echo "Validation failed!";
            $emailErrors = $emailValidator->reportError($email);
            $passwordErrors = $passwordValidator->reportError($password);
            echo "<pre>";
            print_r($emailErrors);
            print_r($passwordErrors);
            echo "</pre>";
        }
    }
}
