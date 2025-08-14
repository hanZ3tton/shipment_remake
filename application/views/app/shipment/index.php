<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Shipment Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="card shadow-sm">
        <div class="card-body">

            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title mb-0">Shipment Information</h5>
            </div>

            <form action="<?= base_url('app/shipment/process_action') ?>" method="post">
                <div class="mb-3">
                    <button type="button" name="add_action" class="btn btn-success btn-sm">Add Shipment</button>
                    <button type="submit" name="edit_action" value="true" class="btn btn-warning btn-sm">Edit Shipment</button>
                    <button type="submit" name="delete_action" value="true" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data yang dipilih?')">Delete Shipment</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="5%"><input class="form-check-input" type="checkbox" id="select-all"></th>
                                <th>ID</th>
                                <th>Shipper</th>
                                <th>Receiver</th>
                                <th>Category</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($shipments)): ?>
                                <?php foreach ($shipments as $s): ?>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" name="shipment_ids[]" value="<?= $s['id'] ?>"></td>
                                        <td><?= $s['id'] ?></td>
                                        <td><?= htmlspecialchars($s['shipper_name']) ?></td>
                                        <td><?= htmlspecialchars($s['receiver_name']) ?></td>
                                        <td><?= htmlspecialchars($s['category']) ?></td>
                                        <td><?= htmlspecialchars($s['service']) ?></td>
                                        <td><span class="badge bg-primary"><?= htmlspecialchars($s['status']) ?></span></td>
                                        <td><?= date('d M Y', strtotime($s['created_at'])) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('select-all').addEventListener('click', function(event) {
            let checkboxes = document.querySelectorAll('input[name="shipment_ids[]"]');
            for (let checkbox of checkboxes) {
                checkbox.checked = event.target.checked;
            }
        });
    </script>

</body>

</html>