<h2><?php echo $title; ?></h2>

<?php if ($this->session->flashdata('error')): ?>
    <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<?php echo validation_errors(); ?>

<form action="<?php echo site_url('auth/login'); ?>" method="post">
    <p>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
    </p>

    <p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">
    </p>

    <p>
        <button type="submit">Login</button>
    </p>
</form>

<p>Belum punya akun? <a href="<?php echo site_url('auth/register'); ?>">Daftar di sini</a></p>