<style>
    body {
        background: #f8f9fc;
        font-family: Arial, sans-serif;
    }

    .form-container {
        max-width: 900px;
        margin: 50px auto;
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .form-container h2 {
        font-size: 26px;
        color: #4e73df;
        margin-bottom: 25px;
        font-weight: bold;
    }

    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: #5a5c69;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .section-title i {
        margin-right: 8px;
        color: #858796;
    }

    .form-row {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }

    .form-row input,
    .form-row textarea {
        flex: 1;
        padding: 10px 14px;
        border: 1px solid #d1d3e2;
        border-radius: 6px;
        font-size: 14px;
        background-color: #fff;
    }

    .form-row input:focus,
    .form-row textarea:focus {
        outline: none;
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    textarea {
        resize: none;
        min-height: 80px;
    }

    .btn-submit {
        background-color: #4e73df;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-submit:hover {
        background-color: #2e59d9;
    }
</style>

<div class="form-container">
    <h2>Edit User</h2>

    <form action="<?php echo site_url('usercontroller/update_user'); ?>" method="post">

        <div class="section-title">
            <i class="fas fa-user"></i> User Details
        </div>

        <div class="form-row">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="form-row">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="form-row">
            <input type="text" name="birth_date" placeholder="Birth Date"
                onfocus="(this.type='date')"
                onblur="if(!this.value) this.type='text'" required>
            <input type="text" name="state" placeholder="State" required>
        </div>

        <div class="section-title">
            <i class="fas fa-map-marker-alt"></i> Address Details
        </div>

        <div class="form-row">
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="postal_code" placeholder="Postal Code" required>
        </div>

        <div class="form-row">
            <textarea name="address" placeholder="Street, District, etc" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Save Changes</button>
    </form>
</div>