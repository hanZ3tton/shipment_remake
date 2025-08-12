<style>
    .form-container {
        max-width: 500px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-row {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .form-row input,
    .form-row textarea {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 25px;
        outline: none;
        font-size: 14px;
    }

    .form-row textarea {
        border-radius: 15px;
        resize: none;
    }

    .btn-submit {
        width: 100%;
        padding: 12px;
        border: none;
        background-color: #4e73df;
        color: #fff;
        font-size: 16px;
        border-radius: 25px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #375ac2;
    }
</style>

<div class="form-container">
    <h2>Edit User</h2>
    <form action="<?php echo site_url('usercontroller/update_user'); ?>" method="post">

        <div class="form-row">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="form-row">
            <input type="text" name="fullname" placeholder="Fullname" required>
        </div>

        <div class="form-row">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="date" name="birth_date" required>
        </div>

        <div class="form-row">
            <input type="text" name="state" placeholder="State" required>
            <input type="text" name="city" placeholder="City" required>
        </div>

        <div class="form-row">
            <textarea name="address" rows="3" placeholder="Address" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Save Changes</button>
    </form>
</div>