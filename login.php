<?php

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $email = trim($_POST['email']);
    $password = $_POST['password']; 
   
    
    
    if (strpos($email, '@') === false) {
        $message = "Error: Email address must contain an '@' symbol.";
        $messageType = "error";
    } 
    
    elseif (!preg_match('/[\W_]/', $password)) {
        $message = "Error: Password must contain at least one special character (e.g., !, @, #).";
        $messageType = "error";
    } 

    else {
      
        
        $message = "Login Successful! Welcome to the School System.";
        $messageType = "success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Portal Login</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #74e29e; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 350px; }
        h2 { text-align: center; color: #2c3e50; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #666; font-size: 14px; }
        input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #52b5e2; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background 0.3s; }
        button:hover { background-color: #2980b9; }
        
     
        .msg { padding: 10px; margin-bottom: 15px; border-radius: 5px; text-align: center; font-size: 14px; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>

<div class="login-card">
    <h2>School Portal</h2>

    <?php if ($message): ?>
        <div class="msg <?php echo $messageType; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="email">School Email</label>
            <input type="text" name="email" id="email" 
                   value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit">Log In</button>
    </form>
</div>

</body>
</html>