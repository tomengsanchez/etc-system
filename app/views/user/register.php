<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; max-width: 400px; margin: 40px auto; padding: 0 20px; }
        .container { background-color: #f9f9f9; padding: 20px 30px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #34495e; }
        input[type="text"], input[type="email"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .invalid-feedback { color: #e74c3c; font-size: 0.9em; margin-top: 5px; }
        .btn { display: block; width: 100%; background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 1em; }
        .btn:hover { background-color: #2980b9; }
        .form-link { text-align: center; margin-top: 15px; }
        .form-link a { color: #3498db; text-decoration: none; }
        .form-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create An Account</h2>
        <p>Please fill out this form to register.</p>
        <form action="<?= URLROOT; ?>/user/register" method="post">
             <input type="hidden" name="csrf_token" value="<?= get_csrf_token(); ?>">
            <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" class="<?= (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['name']; ?>">
                <span class="invalid-feedback"><?= $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" class="<?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email']; ?>">
                <span class="invalid-feedback"><?= $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="<?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['password']; ?>">
                <span class="invalid-feedback"><?= $data['password_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                <input type="password" name="confirm_password" class="<?= (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['confirm_password']; ?>">
                <span class="invalid-feedback"><?= $data['confirm_password_err']; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" value="Register" class="btn">
            </div>
            <div class="form-link">
                <a href="<?= URLROOT; ?>/user/login">Have an account? Login</a>
            </div>
        </form>
    </div>
</body>
</html>
