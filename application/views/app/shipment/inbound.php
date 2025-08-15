<div class="container-table">
    <div class="row justify-content-between px-3">
        <h3 class="mb-4 font-weight-bold">List Inbound</h3>
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

    <a href="<?= base_url('app/shipment/inbound_c') ?>" class="button-add font-weight-bold">Add New shipment</a>
    <div class="mt-3 table-responsive">
        <table class="table table-striped text-nowrap text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="">Code</th>
                    <th class="">Date</th>
                    <th class="">Status</th>
                    <th class="">Shipper Name</th>
                    <th class="">Shipper Phone Number</th>
                    <th class="">Receiver Name</th>
                    <th class="">Weight</th>
                    <th class="">Updated At</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1;
                foreach ($shipments as $s): ?>
                    <tr>
                        <td><?= $n++ ?></td>
                        <td><?= $s['code'] ?></td>
                        <td><?= $s['created_at'] ?></td>
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
                        <td><?= $s['weight'] ?></td>
                        <td><?= $s['updated_at'] ?> </td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fas-fw fa-check" aria-hidden="true"></i></a>
                            <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>