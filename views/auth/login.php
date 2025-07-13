<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .login-box {
            width: 350px;
            margin: 80px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 12px #ccc;
            border-radius: 8px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .error {
            color: #d00;
            text-align: center;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2580e7;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        button:hover {
            background: #1860b1;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login Admin</h2>
        <?php if (!empty($_SESSION['login_error'])): ?>
            <div class="error"><?= $_SESSION['login_error'];
                                unset($_SESSION['login_error']); ?></div>
        <?php endif; ?>
        <form method="post" action="index.php?url=auth/doLogin">
            <div class="input-group">
                <label for="username">Username Admin</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>