<!-- application/views/component/shipment_form.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Shipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }

        .table thead {
            background-color: #4e73df;
            color: white;
        }

        .btn-custom {
            margin-right: 5px;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body class="p-4">

    <div class="container">

        <!-- Profile Card -->
        <div class="row mb-4">
            <!-- Left Card -->
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <img src="https://via.placeholder.com/80" alt="Profile Image" class="profile-image mb-3">
                    <h5>Hi, John Doe</h5>
                    <p class="text-muted mb-0">Your account : johndoe</p>
                </div>
            </div>
            <!-- Right Card -->
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Profile</h5>
                        <button class="btn btn-primary btn-sm">Edit Profile</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>State:</strong> Konoha</p>
                            <p><strong>Email:</strong> a@example.com</p>
                            <p><strong>Address:</strong> 123 Main St</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Phone:</strong> +123 456 7890</p>
                            <p><strong>Birthday:</strong> January 1, 1990</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Information Table -->
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>User Information</h5>
                <div>
                    <button class="btn btn-success btn-sm btn-custom">Add New User</button>
                    <button class="btn btn-warning btn-sm btn-custom text-white">Edit User</button>
                    <button class="btn btn-danger btn-sm">Delete User</button>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-2">
                <input type="text" class="form-control form-control-sm w-auto me-2" placeholder="Search for...">
                <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i> Search</button>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>E-mail</th>
                        <th>Subscription</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td>Canceled</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Lifetime</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Yearly</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td>Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>