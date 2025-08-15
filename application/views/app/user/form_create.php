<div class="form-container">
    <div class="form-header">
        <h2>Add New User</h2>
    </div>
    <form action="<?php echo site_url('app/profile/create'); ?>" method="post">

        <div class="form-row">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="phone_number" placeholder="Phone Number" required>
        </div>

        <div class="form-row">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="form-row">
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="date_of_birth" placeholder="Birth Date"
                onfocus="(this.type='date')"
                onblur="if(!this.value) this.type='text'" required>
        </div>

        <div class="form-row">
            <input type="text" name="state" placeholder="State" required>
            <input type="text" name="city" placeholder="City" required>
        </div>

        <div class="form-row">
            <textarea name="address" placeholder="Street, District, etc" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Save Changes</button>
    </form>
</div>