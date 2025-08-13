<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <div class="d-flex">

        <!-- Profile Name -->
        <div class="container-fluid profile-card">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile.jpg') ?>" alt="Profile Image">
                        <h3 class="mt-3">Hi, <?= $user->full_name; ?></h3>
                        <p class="text-muted">Your account : <?= $user->user_name; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Data -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="mb-4 font-weight-bold">Profile</h4>
                        <a href="#" class="btn btn-primary btn-sm edit-profile">Edit Profile</a>
                    </div>

                    <div class="mb-3">
                        <div class="wrap">
                            <div class="box">
                                <div class="profile-info">
                                    <strong>State:</strong>
                                    <span class="text-muted"><?= $user->state; ?></span>
                                </div>
                                <div class="profile-info">
                                    <strong>Email:</strong>
                                    <span class="text-muted"><?= $user->email; ?></span>
                                </div>
                            </div>
                            <div>
                                <div class="profile-info">
                                    <strong>Phone:</strong>
                                    <span class="text-muted"><?= $user->phone_number; ?></span>
                                </div>
                                <div class="profile-info">
                                    <strong>Birthday:</strong>
                                    <span class="text-muted"><?= date('F j, Y', strtotime($user->date_of_birth)); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="address-info">
                            <strong>Address:</strong>
                            <div class="text-muted"><?= $user->address; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table user -->
    <div class="container-table">
        <div class="row justify-content-between px-3">
            <h4 class="mb-4 font-weight-bold">User Information</h4>
            <div>
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="#" class="button-add">Add New User</a>
        <a href="#" class="button-edit">Edit User</a>
        <a href="#" class="button-delete">Delete User</a>


        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>E-mail</th>
                        <th>Subscription</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td><span class="status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td><span class="status-canceled">Canceled</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Lifetime</td>
                        <td><span class="status-pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Yearly</td>
                        <td><span class="status-completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>SR2451EW32</td>
                        <td>08.04.2021</td>
                        <td>name@shuffle.dev</td>
                        <td>Monthly</td>
                        <td><span class="status-completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>