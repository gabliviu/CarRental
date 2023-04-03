<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

// Define $app and $auth here, if not defined already

// Display login
$app->get('/login', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'login.html.twig');
});
    
// Receive submission
$app->post('/login', function (Request $request, Response $response, $args) use ($app, $log, $passwordPepper) {
    $data = $request->getParsedBody();
    $email = isset($data['email']) ? $data['email'] : '';
    $password = isset($data['password']) ? $data['password'] : '';

    
    // Check if user exists
    $record = DB::queryFirstRow("SELECT is_admin, email, password FROM users WHERE email = %s", $email);

    if ($record) {
        $pwdPeppered = hash_hmac('sha256', $password, $passwordPepper);
        $pwdHashed = $record['password'];
    
        // Check if password is correct
        if ($pwdPeppered === $pwdHashed) {
            // authenticated, redirect to appropriate page based on user type
            if ($record['is_admin']) {
                return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
            } else {
                return $response->withHeader('Location', '/customerprofile')->withStatus(302);
            }
        } else {
            // incorrect password, show error message
            $log->info(sprintf('Login failed for email %s from %s', $email, $_SERVER['REMOTE_ADDR']));
            return $this->get('view')->render($response, 'login_error.html.twig', ['error' => true]);
        }
    }    

    //  // Show error message
     return $this->get('view')->render($response, 'login_error.html.twig', ['error' => true]);
});

// Check if user is logged in
function checkAuth() {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
}

// Display home page
$app->get('/home', function (Request $request, Response $response) use ($app) {
    checkAuth();
    $isLoggedIn = isset($_SESSION['user']);
    return $this->get('view')->render($response, 'index.html.twig', [
        'auth' => [
            'isLoggedIn' => $isLoggedIn
        ]
    ]);
});


//LOGOUT
$app->get('/logout', function (Request $request, Response $response, $args) use ($log) {
    session_start();
    if (isset($_SESSION['user'])) {
        $log->debug(sprintf(
            "Logout successful for uid=%d, from %s",
            $_SESSION['user']['id'],
            $_SERVER['REMOTE_ADDR']
        ));

        unset($_SESSION['user']);
    }

    return $this->get('view')->render($response, 'logout.html.twig', [
        'usersession' => null
    ]);
});
