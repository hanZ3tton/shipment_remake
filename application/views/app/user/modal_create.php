<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="form-container">

                <div class="form-header">
                    <h2>Add New User</h2>
                    <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

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
        </div>
    </div>
</div>