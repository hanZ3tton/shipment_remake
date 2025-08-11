<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #f093fb, #f5576c);
            min-height: 100vh;
        }

        .card-registration {
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        /* Pendekkan form */
        .form-control-lg {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 8px;
        }

        .btn-custom {
            background: #f5576c;
            border: none;
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #d74457;
        }

        h3 {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width:360px;">
        <h4 class="mb-3 text-center">Login</h4>

        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <form action="<?php echo site_url('auth/login_action'); ?>" method="post">
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email or Username" value="<?php echo set_value('email'); ?>">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary">Login</button>
            </div>
            <div class="mt-2 text-center">
                <a href="<?php echo site_url('auth/register'); ?>">Register</a>
            </div>
        </form>
    </div>
</body>

</html>