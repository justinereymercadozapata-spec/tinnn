<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The First Teacher - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .sidebar { height: 100vh; background-color: #2c3e50; color: white; }
        .sidebar a { color: #bdc3c7; text-decoration: none; display: block; padding: 10px; }
        .sidebar a:hover, .sidebar a.active { background-color: #34495e; color: white; border-left: 4px solid #3498db; }
        .stat-card { border-left: 4px solid #3498db; transition: transform 0.2s; }
        .stat-card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-2 sidebar p-3">
            <h5 class="mb-4 text-center mt-2">
                <i class="bi bi-book-half text-warning"></i> The First Teacher
            </h5>
            <hr class="text-white">
            <a href="#" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
            <a href="#"><i class="bi bi-people"></i> Students</a>
            <a href="#"><i class="bi bi-person-badge"></i> Teachers</a>
            <a href="#"><i class="bi bi-clipboard-check"></i> Assessments</a>
            <a href="#"><i class="bi bi-gear"></i> Settings</a>
            <a href="#" class="mt-5 text-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>

        <div class="col-md-10 p-4 bg-light">
            
            <div class="d-flex justify-content-between mb-4">
                <h2>Admin Dashboard</h2>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> Admin
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm stat-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Enrolled Children</h5>
                                <h2>120</h2>
                                <small class="text-muted">Ages 3-5 Years</small>
                            </div>
                            <i class="bi bi-emoji-smile fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm stat-card" style="border-left-color: #2ecc71;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Teaching Staff</h5>
                                <h2>12</h2>
                                <small class="text-muted">Certified Educators</small>
                            </div>
                            <i class="bi bi-person-workspace fs-1 text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm stat-card" style="border-left-color: #e74c3c;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pending Enrollments</h5>
                                <h2>5</h2>
                                <small class="text-muted">Needs Review</small>
                            </div>
                            <i class="bi bi-file-earmark-text fs-1 text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0">Student Management</h5>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Enroll New Child</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Child Name</th>
                                    <th>Age</th>
                                    <th>Program Level</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ST001</td>
                                    <td>Liam Cruz</td>
                                    <td>4</td>
                                    <td>Kinder 1</td>
                                    <td><span class="badge rounded-pill bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info" title="View"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ST002</td>
                                    <td>Sophia Reyes</td>
                                    <td>5</td>
                                    <td>Kinder 2</td>
                                    <td><span class="badge rounded-pill bg-warning text-dark">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>