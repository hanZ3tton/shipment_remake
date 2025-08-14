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
                        <a href="<?= base_url('app/profile/update/' . $user->id); ?>" class="btn btn-primary btn-sm edit-profile">Edit Profile</a>
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

        <a href="<?= base_url('app/profile/create') ?>" class="button-add">Add New User</a>
        <div class="mt-3 table-responsive">
            <table class="table table-striped text-nowrap text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-25">Username</th>
                        <th class="w-50">Full Name</th>
                        <th class="w-50">E-mail</th>
                        <th class="w-25">Phone Number</th>
                        <th class="w-25">State</th>
                        <th class="w-40">City</th>
                        <th class="w-70">Address</th>
                        <th class="w-25">Created at</th>
                        <th class="w-25">Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1;
                    foreach ($users as $user): ?>
                        <tr>
                            <td><?= $number++ ?></td>
                            <td><?= $user->user_name; ?></td>
                            <td><?= $user->full_name ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->phone_number; ?></td>
                            <td><?= $user->state ?></td>
                            <td><?= $user->city; ?></td>
                            <td><?= $user->address; ?></td>
                            <td><?= $user->created_at; ?></td>
                            <td><?= $user->updated_at; ?></td>

                            <td>
                                <a href="<?= base_url('app/profile/update/' . $user->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('app/profile/delete/' . $user->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>