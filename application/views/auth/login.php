<body style="background-color: gray;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div
                class="col-xl-10 col-lg-12 col-md-9 vh-100 d-flex justify-content-center align-items-center">
                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control form-control-user"
                                                id="username"
                                                name="username"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter Username..."
                                                value="<?php echo set_value('email'); ?>" />
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class=" form-group">
                                            <input
                                                type="password"
                                                class="form-control form-control-user"
                                                id="password"
                                                name="password"
                                                placeholder="Password" />
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <?= form_error('login_failed', '<small class="text-danger pl-3">', '</small>') ?>

                                        </div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr />
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register') ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>