<!DOCTYPE html>
<html>

<head>
    <title>Shipment List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9fc;
        }

        .card {
            border-radius: 8px;
            border: none;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .table thead {
            background-color: #3b7ddd;
            color: white;
        }

        .table thead th {
            border: none;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-warning {
            background-color: #f0ad4e;
            color: white;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .search-box {
            max-width: 250px;
        }
    </style>
</head>

<body class="p-4">

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">Shipment Information</h5>
                <div class="search-box input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm">Add Shipment</button>
                <button class="btn btn-warning btn-sm">Edit Shipment</button>
                <button class="btn btn-danger btn-sm">Delete Shipment</button>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>ID</th>
                            <th>Shipper</th>
                            <th>Receiver</th>
                            <th>Category</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($shipments as $s): ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?= $s['id'] ?></td>
                                <td><?= $s['shipper_name'] ?></td>
                                <td><?= $s['receiver_name'] ?></td>
                                <td><?= $s['category'] ?></td>
                                <td><?= $s['service'] ?></td>
                                <td><?= $s['status'] ?></td>
                                <td><?= date('d.m.Y', strtotime($s['created_at'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>

</html>