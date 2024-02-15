<?php

declare(strict_types=1);

namespace MVC\Controllers;

use MVC\Models\User;
use MVC\Core\Helpers;
use MVC\Core\Session;
use MVC\Core\Controller;
use Respect\Validation\Validator as v;

/**
 * Class UserController
 * @package MVC\Controllers
 */
class UserController extends Controller
{
    /**
     * User Controller constructor.
     * Checks and authorizes access.
     */
    public function __construct()
    {
        $this->authorizeAccess(); // Checking access
    }

    /**
     * Authorize access to the UserController.
     */
    private function authorizeAccess(): void
    {
        Session::start();
        $user = Session::get("user");

        if (empty($user)) {
            echo "Access denied!";
            exit;
        }
    }

    /**
     * Display the home page.
     */
    public function index(): void
    {
        echo "user";
    }
}
