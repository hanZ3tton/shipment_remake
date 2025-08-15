<div class="form-container">
    <div class="form-header">
        <h2>Edit User</h2>
    </div>
    <form action="<?php echo site_url('app/profile/update/' . $user->id); ?>" method="post">

        <div class="form-row">
            <input type="text" name="full_name" placeholder="Full Name" value="<?= $user->full_name ?>" required>
            <input type="text" name="phone_number" placeholder="Phone Number" value="<?= $user->phone_number ?>" required>
        </div>

        <div class="form-row">
            <input type="text" name="user_name" placeholder="Username" value="<?= $user->user_name ?>" readonly>
            <input type="email" name="email" placeholder="Email Address" value="<?= $user->email ?>" required>
        </div>

        <div class="form-row">
            <input type="password" name="password" placeholder="Leave blank if not changing">
            <input type="text" name="date_of_birth" placeholder="Birth Date"
                value="<?= $user->date_of_birth ?>"
                onfocus="(this.type='date')"
                onblur="if(!this.value) this.type='text'" required>
        </div>

        <div class="form-row">
            <input type="text" name="state" placeholder="State" value="<?= $user->state ?>" required>
            <input type="text" name="city" placeholder="City" value="<?= $user->city ?>" required>
        </div>

        <div class="form-row">
            <textarea name="address" placeholder="Street, District, etc" required><?= $user->address ?></textarea>
        </div>

        <button type="submit" class="btn-submit">Save Changes</button>
    </form>
</div>