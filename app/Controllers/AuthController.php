<?php

namespace App\Controllers;

use App\Core\Auth\Auth;
use App\Core\Controller;
use App\Core\Facades\View;
use App\Core\Notification;
use App\Core\Response;
use App\Core\Validator;
use App\Enum\EnumNotificationState;
use App\Helpers\Hash;
use App\Services\UserService;
use Random\RandomException;

class AuthController extends Controller
{
    public function __construct(
        protected UserService $userService = new UserService(),
    ) {
        parent::__construct();
    }

    public function loginForm(): ?View
    {
        return View::layout('layouts.app')
            ->withData([
                'title' => 'Login',
            ])
            ->view('pages.auth.login')
            ->render();
    }

    /**
     * @throws RandomException
     */
    public function login(): void
    {
        if (!isset($_POST)) {
            return;
        }
        $request = $_POST;

        $email = $request['email'];
        $password = $request['password'];

        if ($user = Auth::attempt($email, $password)) {
            Notification::push(
                "Heureux de vous revoir $user->username !",
                EnumNotificationState::SUCCESS->value
            );
            Response::redirect('/me');
            exit;
        }

        Notification::push(
            'Erreur dans la combinaison email/password',
            EnumNotificationState::ERROR->value
        );

        Response::redirectToLogin();
    }

    /**
     * @return View|null
     */
    public function registerForm(): ?View
    {
        return View::layout('layouts.app')
            ->withData([
                'title' => 'Register',
            ])
            ->view('pages.auth.register')
            ->render();
    }

    /**
     * @throws RandomException
     */
    public function register(): void
    {
        if (!isset($_POST)) {
            return;
        }
        $request = $_POST;

        $isValidate = Validator::check($request, [
            'username' => [
                'string' => true,
                'required' => true,
            ],
            'password' => [
                'string' => true,
                'required' => true,
                'min' => 8,
            ],
            'email' => [
                'email' => true,
                'required' => true,
            ],
        ]);

        if (!$isValidate) {
            Notification::push(
                'Des informations ne sont pas valides',
                EnumNotificationState::ERROR->value
            );

            Response::redirect('/register');
        }

        $displayName = ucfirst($request['username']);

        $this->userService->create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Notification::push(
            "Bienvenue sur TomTroc $displayName !",
            EnumNotificationState::SUCCESS->value
        );

        Auth::attempt($request['email'], $request['password']);

        Response::redirect('/');
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        Auth::logout();

        Response::redirect('/');
    }
}
