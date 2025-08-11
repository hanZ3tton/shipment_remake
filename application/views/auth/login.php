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