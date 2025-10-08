<?php
session_start();
// Dummy user authentication
$users = [
    'admin' => [
        'password' => password_hash('password', PASSWORD_DEFAULT),
        'role' => 'admin'
    ],
    'manager' => [
        'password' => password_hash('password', PASSWORD_DEFAULT),
        'role' => 'manager'
    ],
    'employe' => [
        'password' => password_hash('password', PASSWORD_DEFAULT),
        'role' => 'employe'
    ]
];

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $users[$username]['role'];

            switch ($users[$username]['role']) {
                case 'admin':
                    header('Location: pages/admin/admin_dashboard.php');
                    exit;
                case 'manager':
                    header('Location: pages/manager/manager_dashboard.php');
                    exit;
                case 'employe':
                    header('Location: pages/employe/employe_dashboard.php');
                    exit;
            }
        } else {
            $error = 'Invalid username or password';
        }
    } elseif (isset($_POST['signup'])) {
        // Signup logic to be implemented
        $error = 'Signup is not yet implemented.';
    }
}

$action = $_GET['action'] ?? 'login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <?php if ($action === 'login'): ?>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="login.php">
                <div class="mb-4">
                    <img src="assets/greentsika.png" alt="Greentsika Logo" class="h-12 mx-auto">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                </div>
                <?php if ($error): ?>
                    <p class="text-red-500 text-xs italic"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php?action=signup">
                        Create an account
                    </a>
                </div>
            </form>
        <?php else: ?>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="login.php?action=signup">
                <div class="mb-4">
                    <img src="assets/greentsika.png" alt="Greentsika Logo" class="h-12 mx-auto">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                        Confirm Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="confirm-password" name="confirm_password" type="password" placeholder="******************">
                </div>
                <?php if ($error): ?>
                    <p class="text-red-500 text-xs italic"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="signup">
                        Sign Up
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                        Already have an account?
                    </a>
                </div>
            </form>
        <?php endif; ?>
        <p class="text-center text-gray-500 text-xs">
            &copy;2025 Greentsika. All rights reserved.
        </p>
    </div>
</body>
</html>
