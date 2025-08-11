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

<div
    class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="username"
                                        name="username"
                                        placeholder="Username"
                                        value="<?php echo set_value('username'); ?>" />
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="phoneNumber"
                                        name="phoneNumber"
                                        placeholder="Phone Number"
                                        value="<?php echo set_value('phoneNumber'); ?>" />
                                    <?= form_error('phoneNumber', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="fullname"
                                    name="fullname"
                                    placeholder="Enter fullname ..."
                                    value="<?php echo set_value('fullname'); ?>" />
                                <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="email"
                                    name="email"
                                    placeholder="Email Address" />
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input
                                        type="password"
                                        class="form-control form-control-user"
                                        id="password"
                                        name="password"
                                        placeholder="Password" />
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input
                                        type="password"
                                        class="form-control form-control-user"
                                        id="password2"
                                        name="password2"
                                        placeholder="Confrim Password" />
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>

                                </div>
                                <div class="form-group">
                                    <input
                                        type="date"
                                        class="form-control form-control-user"
                                        id="birthdayDate"
                                        name="birthdayDate"
                                        placeholder="Email Address" />
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr />
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/login') ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>