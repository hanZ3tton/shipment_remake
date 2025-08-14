<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <div class="d-flex">

        <!-- Profile Name -->
        <div class="container-fluid profile-card">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center ">
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile.jpg') ?>" alt="Profile Image">
                        <h3 class="mt-3">Hi, John Doe</h3>
                        <p class="text-muted">Your account : johndoe</p>

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
                        <a href="<?= base_url('user/edit') ?>" class="btn btn-primary btn-sm edit-profile" data-toggle="modal" data-target="#modalEdit">Edit Profile</a>
                    </div>

                    <div class="mb-3">
                        <div class="wrap">
                            <div class="box">
                                <div class="profile-info">
                                    <strong>State:</strong>
                                    <span class="text-muted"><?= $user['state']; ?></span>
                                </div>
                                <div class="profile-info">
                                    <strong>Email:</strong>
                                    <span class="text-muted"><?= $user->email; ?></span>
                                </div>
                            </div>
                            <div>
                                <div class="profile-info">
                                    <strong>Phone:</strong>
                                    <span class="text-muted"><?= $user->phone_number ?></span>
                                </div>
                                <div class="profile-info">
                                    <strong>Birthday:</strong>
                                    <span class="text-muted"> January 1, 1990</span>
                                </div>
                            </div>
                        </div>
                        <div class="address-info">
                            <strong>Address:</strong>
                            <div class="text-muted">123 Main St</div>
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

        <a href="user/add" class="button-add">Add New User</a>
        <a href="user/edit" class="button-edit">Edit User</a>
        <a href="user/delete" class="button-delete">Delete User</a>


        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>E-mail</th>
                        <th>Phone Number</th>
                        <th>Create at</th>
                        <th>Update at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $key => $value) {
                        echo "<tr>";
                        echo "<td>{$value->username}</td>";
                        echo "<td>{$value->fullname}</td>";
                        echo "<td>{$value->email}</td>";
                        echo "<td>{$value->phone_number}</td>";
                        echo "<td>{$value->created_at}</td>";
                        echo "<td>{$value->updated_at}</td>";
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>