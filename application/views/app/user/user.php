<!-- Profile Name -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile.jpg') ?>" alt="Profile Image">
                        <h3 class="mt-3">Hi, John Doe</h3>
                        <p class="text-muted">Your account : johndoe</p>
                        <a href="#" class="btn btn-primary btn-sm">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Data -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="mb-4 font-weight-bold">User Information</h4>
                    <div class="mb-3">
                        <p class="mb-0"><strong>Age:</strong>
                            <span class="text-muted"> 30</span>
                        </p>
                        <p class="mb-0"><strong>Address:</strong>
                            <span class="text-muted "> 123 Main St, City, Country</span>
                        </p>

                        <p class="mb-0"><strong>Email:</strong>
                            <span class="text-muted"> a @example.com</span>
                        </p>
                        <p class="mb-0"><strong>Phone:</strong>
                            <span class="text-muted"> +123 456 7890</span>
                        </p>
                        <p class="mb-0"><strong>Address:</strong>
                            <span class="text-muted"> 123 Main St, City, Country</span>
                        </p>
                        <p class="mb-0"><strong>Birthday:</strong>
                            <span class="text-muted"> January 1, 1990</span>
                        </p>
                        <p class="mb-0"><strong>Created At:</strong>
                            <span class="text-muted"> 2021-01-01 12:00:00</span>
                        </p>
                        <p class="mb-0"><strong>Updated At:</strong>
                            <span class="text-muted"> 2021-01-02 12:00:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-table">
    <div class="row justify-content-between px-3">
        <h4 class="mb-4 font-weight-bold">Recent Transactions</h4>
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
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>Transaction ID</th>
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