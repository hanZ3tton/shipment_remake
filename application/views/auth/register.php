<h1>Register</h1>

<!-- Pesan error validasi -->
<?php echo validation_errors(); ?>

<!-- Flash message -->
<?php if ($this->session->flashdata('error')): ?>
    <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <p style="color:green;"><?php echo $this->session->flashdata('success'); ?></p>
<?php endif; ?>

<?php echo form_open('auth/register'); ?>

<p>
    <label for="fullname">Full Name:</label><br>
    <input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>">
</p>

<p>
    <label for="username">Username:</label><br>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>">
</p>

<p>
    <label for="password">Password:</label><br>
    <input type="password" name="password">
</p>

<p>
    <label for="email">Email:</label><br>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>">
</p>

<p>
    <label for="phoneNumber">Phone Number:</label><br>
    <input type="text" name="phoneNumber" value="<?php echo set_value('phoneNumber'); ?>">
</p>

<p>
    <label for="birthdayDate">Birthday:</label><br>
    <input type="date" name="birthdayDate" value="<?php echo set_value('birthdayDate'); ?>">
</p>

<p>
    <label for="state">State:</label><br>
    <input type="text" name="state" value="<?php echo set_value('state'); ?>">
</p>

<p>
    <label for="city">City:</label><br>
    <input type="text" name="city" value="<?php echo set_value('city'); ?>">
</p>

<p>
    <label for="address">Address:</label><br>
    <textarea name="address"><?php echo set_value('address'); ?></textarea>
</p>

<p>
    <button type="submit">Register</button>
</p>

<?php echo form_close(); ?>