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
    <div class="mt-3 table-responsive">
        <table class="table table-striped text-nowrap text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="w-25">Status</th>
                    <th class="w-50">Shipper Name</th>
                    <th class="w-50">Shipper Phone Number</th>
                    <th class="w-25">Receiver Name</th>
                    <th class="w-25">Receiver Phone Number</th>
                    <th class="w-40">Receiver State</th>
                    <th class="w-70">Receiver City</th>
                    <th class="w-25">Receiver Postal Code</th>
                    <th class="w-25">Receiver Address</th>
                    <th class="w-25">Service</th>
                    <th class="w-25">Category</th>
                    <th class="w-25">Weight</th>
                    <th class="w-25">Length</th>
                    <th class="w-25">Width</th>
                    <th class="w-25">Height</th>
                    <th class="w-25">Created At</th>
                    <th class="w-25">Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1;
                foreach ($shipments as $s): ?>
                    <tr>
                        <td><?= $n++ ?></td>
                        <td><?php if ($s['status'] == "INBOUND") {
                                echo '<span class="badge badge-info">INBOUND</span>';
                            } elseif ($s['status'] == "OUTBOUND") {
                                echo '<span class="badge badge-warning">OUTBOUND</span>';
                            } elseif ($s['status'] == "AP HOLD") {
                                echo '<span class="badge badge-secondary">AP HOLD</span>';
                            } elseif ($s['status'] == "VOID") {
                                echo '<span class="badge badge-danger">VOID</span>';
                            } elseif ($s['status'] == "COMPLETE DOCS") {
                                echo '<span class="badge badge-success">COMPLETE DOCS</span>';
                            } ?></td>
                        <td><?= $s['shipper_name'] ?></td>
                        <td><?= $s['shipper_phone_number'] ?></td>
                        <td><?= $s['receiver_name'] ?></td>
                        <td><?= $s['receiver_phone_number'] ?></td>
                        <td><?= $s['receiver_state'] ?></td>
                        <td><?= $s['receiver_city'] ?></td>
                        <td><?= $s['receiver_postal_code'] ?></td>
                        <td><?= $s['receiver_address'] ?></td>
                        <td><?= $s['service'] ?></td>
                        <td><?= $s['category'] ?></td>
                        <td><?= $s['weight'] ?></td>
                        <td><?= $s['length'] ?></td>
                        <td><?= $s['width'] ?></td>
                        <td><?= $s['height'] ?></td>
                        <td><?= $s['created_at'] ?></td>
                        <td><?= $s['updated_at'] ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>