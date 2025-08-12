<style>
    body {
        background: #f8f9fc;
        font-family: Arial, sans-serif;
    }

    .form-container {
        max-width: 950px;
        /* lebih besar lagi */
        margin: 50px auto;
        background: #fff;
        padding: 50px;
        /* padding lebih besar */
        border-radius: 25px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-container:hover {
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 35px;
        font-weight: bold;
        color: #4e73df;
        font-size: 28px;
    }

    .form-row {
        display: flex;
        gap: 20px;
        /* jarak antar kolom lebih lebar */
        margin-bottom: 20px;
    }

    .form-row input,
    .form-row textarea {
        flex: 1;
        padding: 16px 20px;
        /* input lebih tinggi */
        border: 1px solid #ccc;
        border-radius: 35px;
        /* lebih bulat */
        outline: none;
        font-size: 16px;
        background: #f9f9f9;
        transition: all 0.2s ease-in-out;
    }

    .form-row input:focus,
    .form-row textarea:focus {
        border-color: #4e73df;
        background: #fff;
        box-shadow: 0 0 10px rgba(78, 115, 223, 0.4);
    }

    .form-row textarea {
        border-radius: 20px;
        resize: none;
        min-height: 100px;
    }

    .btn-submit {
        width: 100%;
        padding: 16px;
        border: none;
        background: linear-gradient(90deg, #4e73df, #224abe);
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        border-radius: 35px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: linear-gradient(90deg, #224abe, #4e73df);
        transform: translateY(-2px);
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