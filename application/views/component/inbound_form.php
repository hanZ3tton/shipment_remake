<div class="container mt-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('shipments/form') ?>">Informasi Pengiriman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('inbound/form') ?>">Informasi Inbound</a>
        </li>
    </ul>

    <form action="<?= base_url('inbound/save') ?>" method="post" class="mt-3">
        <h5>Informasi Inbound</h5>

        <div class="mb-3">
            <label>Nama Pengirim:</label>
            <input type="text" name="inbound_shipper_name" class="form-control" placeholder="Nama Pengirim" required>
        </div>

        <div class="mb-3">
            <label>Telepon Pengirim:</label>
            <input type="text" name="inbound_shipper_phone" class="form-control" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="mb-3">
            <label>Berat (kg):</label>
            <input type="number" step="0.01" name="weight" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi:</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Inbound:</label>
            <input type="date" name="inbound_date" class="form-control" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">