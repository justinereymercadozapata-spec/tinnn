<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>The First Teacher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .logo {
            font-size: 36px;
            font-weight: 800;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }
        .subtitle {
            color: #6b7280;
            font-size: 16px;
            font-weight: 500;
        }

        .main-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            max-width: 500px;
            margin: 0 auto 30px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .welcome {
            text-align: center;
            margin-bottom: 30px;
        }
        .welcome-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            border-radius: 16px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }
        .welcome-title {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 5px;
        }
        .welcome-subtitle {
            color: #6b7280;
            font-size: 16px;
        }

        .login-form {
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            background: #f9fafb;
            transition: all 0.2s;
        }
        input:focus {
            outline: none;
            border-color: #8b5cf6;
            background: white;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
        }

        .forgot-password {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
        }
        .forgot-password a {
            color: #8b5cf6;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }

        .rules {
            background: #f8fafc;
            padding: 15px;
            border-radius: 12px;
            font-size: 14px;
            color: #64748b;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 12px;
        }
        .login-btn {
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
            color: white;
            box-shadow: 0 4px 14px rgba(139, 92, 246, 0.4);
        }
        .login-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(139, 92, 246, 0.5);
        }
        .signup-btn {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            color: white;
            box-shadow: 0 4px 14px rgba(16, 185, 129, 0.4);
        }
        .signup-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5);
        }

        .dashboard-preview {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 30px;
        }
        .dash-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.2s;
        }
        .dash-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .dash-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 10px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 600;
        }
        .activities { background: linear-gradient(135deg, #8b5cf6, #a78bfa); color: white; }
        .milestones { background: linear-gradient(135deg, #10b981, #34d399); color: white; }
        .dash-title {
            font-size: 14px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 5px;
        }

        .message {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .error { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }
        .success { background: #d1fae5; color: #059669; border: 1px solid #a7f3d0; }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }
        .modal-content {
            background: rgba(255,255,255,0.95);
            margin: 80px auto;
            width: 90%;
            max-width: 450px;
            border-radius: 24px;
            max-height: 85vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }
        .modal-header {
            padding: 30px 30px 20px;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
        }
        .modal-close {
            position: absolute;
            right: 25px;
            top: 25px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #9ca3af;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-close:hover {
            background: #f3f4f6;
            color: #374151;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">The First Teacher</div>
        <div class="subtitle">Every parent is a teacher</div>
    </div>

    <div class="main-card">
        <div class="welcome">
            <div class="welcome-icon">👋</div>
            <div class="welcome-title">Welcome</div>
            <div class="welcome-subtitle">Add your first daily activity</div>
        </div>

        <form class="login-form" method="POST">
            <?php if (isset($_SESSION['login_message'])): ?>
                <div class="message <?php echo strpos($_SESSION['login_message'], 'success') ? 'success' : 'error'; ?>">
                    <?php echo $_SESSION['login_message']; unset($_SESSION['login_message']); ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
                <div class="forgot-password">
                    <a href="#" onclick="alert('Forgot password feature coming soon!')">Forgot Password?</a>
                </div>
            </div>
            
            <div class="rules">
                Email needs @<br>
                Password: 8+ chars with !@#
            </div>

            <button type="submit" name="login" class="btn login-btn">Continue</button>
            <button type="button" class="btn signup-btn" onclick="openModal()">Create Account</button>
        </form>

        <div class="dashboard-preview">
            <div class="dash-card">
                <div class="dash-icon activities">📚</div>
                <div class="dash-title">Activities</div>
            </div>
            <div class="dash-card">
                <div class="dash-icon milestones">⭐</div>
                <div class="dash-title">Milestones</div>
            </div>
        </div>
    </div>

    <div id="signupModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <button class="modal-close" onclick="closeModal()">&times;</button>
                <h2 style="color: #1f2937; font-size: 24px; font-weight: 700;">Create Account</h2>
            </div>
            <div style="padding: 30px;">
                <form method="POST">
                    <input type="hidden" name="modal_register" value="1">
                    
                    <?php if (isset($_SESSION['modal_reg_message'])): ?>
                        <div class="message <?php echo strpos($_SESSION['modal_reg_message'], 'success') ? 'success' : 'error'; ?>">
                            <?php echo $_SESSION['modal_reg_message']; unset($_SESSION['modal_reg_message']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required minlength="8">
                    </div>
                    
                    <div class="rules">
                        Email needs @<br>
                        Password: 8+ chars with !@#
                    </div>

                    <button type="submit" name="register" class="btn login-btn">Create Account</button>
                    <button type="button" class="btn signup-btn" onclick="closeModal()" style="background: #6b7280;">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('signupModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
        function closeModal() {
            document.getElementById('signupModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        window.onclick = function(event) {
            var modal = document.getElementById('signupModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdg4_edu";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    $_SESSION['login_message'] = 'Database connection failed.';
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

function validateEmail($email) {
    return strpos($email, '@') !== false;
}
function validatePassword($password) {
    return strlen($password) >= 8 && preg_match('/[!@#]/', $password);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_conn = new mysqli($servername, $username, $password, $dbname);
    if ($new_conn->connect_error) {
        $_SESSION['login_message'] = 'Database connection failed.';
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    $new_conn->set_charset("utf8");

    if (isset($_POST['register'])) {
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $pass = $_POST['password'];

        if (!validateEmail($email)) {
            $msg_key = isset($_POST['modal_register']) ? 'modal_reg_message' : 'reg_message';
            $_SESSION[$msg_key] = 'Email must contain "@".';
        } elseif (!validatePassword($pass)) {
            $msg_key = isset($_POST['modal_register']) ? 'modal_reg_message' : 'reg_message';
            $_SESSION[$msg_key] = 'Password must be 8+ chars with !, @, or #.';
        } else {
            $stmt = $new_conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            if ($stmt->get_result()->num_rows > 0) {
                $msg_key = isset($_POST['modal_register']) ? 'modal_reg_message' : 'reg_message';
                $_SESSION[$msg_key] = 'Email already registered.';
            } else {
                $hashed = password_hash($pass, PASSWORD_DEFAULT);
                $stmt = $new_conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $fullname, $email, $hashed);
                if ($stmt->execute()) {
                    $msg_key = isset($_POST['modal_register']) ? 'modal_reg_message' : 'reg_message';
                    $_SESSION[$msg_key] = 'Registered successfully! Please login.';
                } else {
                    $_SESSION['modal_reg_message'] = 'Registration failed.';
                }
            }
        }
    } elseif (isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $pass = $_POST['password'];

        if (!validateEmail($email)) {
            $_SESSION['login_message'] = 'Email must contain "@".';
        } elseif (!validatePassword($pass)) {
            $_SESSION['login_message'] = 'Password must contain special character.';
        } else {
            $stmt = $new_conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user && password_verify($pass, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullname'] = $user['fullname'];
                $_SESSION['login_message'] = 'Login successful!';
            } else {
                $_SESSION['login_message'] = 'Invalid email or password.';
            }
        }
    }
    $new_conn->close();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
$conn->close();
ob_end_flush();
?>
</body>
</html>
