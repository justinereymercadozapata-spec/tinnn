<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The First Teacher - Admin Login (SDG 4.2)</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for SDG theme -->
    <style>
        body {
            background: linear-gradient(135deg, #4CAF50, #2196F3); /* Green-blue for education/growth */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            max-width: 400px;
            width: 100%;
            padding: 2rem;
        }
        .sdg-badge {
            background: #FF9800;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-card">
                    <div class="text-center">
                        <div class="logo">The First Teacher</div>
                        <div class="sdg-badge">SDG 4.2 - Early Childhood Education</div>
                        <p class="text-muted mb-4">Admin Login: Empowering the first teachers for quality pre-primary learning.</p>
                    </div>
                    <form>
                        <div class="mb-4">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS CDN (optional for form enhancements) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
