<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table with Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .table thead th {
            font-weight: 600;
            color: #555;
            border-bottom: 2px solid #f1f1f1;
            background-color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f9fafb;
        }

        .form-check-input {
            transform: scale(1.2);
            cursor: pointer;
        }

        .status {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
        }

        .status-active {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-inactive {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .btn-close {
            border: none;
            background-color: #ef4444;
            color: white;
            border-radius: 6px;
            padding: 2px 8px;
            font-size: 14px;
            line-height: 1;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-close:hover {
            background-color: #dc2626;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card p-4">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all" class="form-check-input"></th>
                            <th>EMPLOYEES</th>
                            <th>POSITION</th>
                            <th>AGE</th>
                            <th>ADDRESS</th>
                            <th>STATUS</th>
                            <th>Close</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>61</td>
                            <td>Edinburgh</td>
                            <td><span class="status status-active">Active</span></td>
                            <td><button class="btn-close">&times;</button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>23</td>
                            <td>Edinburgh</td>
                            <td><span class="status status-pending">Pending</span></td>
                            <td><button class="btn-close">&times;</button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>30</td>
                            <td>London</td>
                            <td><span class="status status-inactive">Inactive</span></td>
                            <td><button class="btn-close">&times;</button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>22</td>
                            <td>Edinburgh</td>
                            <td><span class="status status-active">Active</span></td>
                            <td><button class="btn-close">&times;</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('select-all').addEventListener('click', function(e) {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = e.target.checked);
        });
    </script>

</body>

</html>