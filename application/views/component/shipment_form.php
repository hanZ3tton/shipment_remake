<!-- application/views/component/shipment_form.php -->
<div class="container mt-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('shipments/form') ?>">Informasi Pengiriman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('inbound/form') ?>">Informasi Inbound</a>
        </li>
    </ul>

    <form action="<?= base_url('shipments/save') ?>" method="post" class="mt-3">
        <!-- Informasi Pengirim -->
        <h5>Informasi Pengirim</h5>
        <div class="row mb-3">
            <div class="col-md-6">
                <label>Nama Pengirim :</label>
                <input type="text" name="shipper_name" class="form-control" placeholder="Nama Pengirim">
            </div>
            <div class="col-md-6">
                <label>Telepon Pengirim :</label>
                <input type="text" name="shipper_phone_number" class="form-control" placeholder="08xxxxxxxxxx">
            </div>
        </div>
        <div class="mb-3">
            <label>Alamat Pengirim :</label>
            <textarea name="shipper_address" class="form-control" rows="2"></textarea>
        </div>

        <!-- Informasi Penerima -->
        <h5>Informasi Penerima</h5>
        <div class="row mb-3">
            <div class="col-md-4">
                <label>Nama Penerima :</label>
                <input type="text" name="receiver_name" class="form-control" placeholder="Nama Penerima">
            </div>
            <div class="col-md-4">
                <label>Telepon Penerima :</label>
                <input type="text" name="receiver_phone_number" class="form-control" placeholder="08xxxxxxxxxx">
            </div>
            <div class="col-md-4">
                <label>Nomor ARC / ID Penerima :</label>
                <input type="text" name="receiver_arc_id" class="form-control" placeholder="Nomor ARC / ID">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Negara :</label>
                <select name="receiver_state" class="form-control">
                    <option value="">-- Pilih Negara --</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Kota :</label>
                <input type="text" name="receiver_city" class="form-control">
            </div>
            <div class="col-md-4">
                <label>Kode Pos :</label>
                <input type="text" name="receiver_postal_code" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Alamat Penerima :</label>
            <textarea name="receiver_address" class="form-control" rows="2"></textarea>
        </div>

        <!-- Informasi Barang -->
        <h5>Informasi Barang</h5>
        <div class="row mb-3">
            <div class="col-md-3">
                <label>Kategori :</label>
                <input type="text" name="category" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Panjang (cm) :</label>
                <input type="number" step="0.01" name="length" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Lebar (cm) :</label>
                <input type="number" step="0.01" name="width" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Tinggi (cm) :</label>
                <input type="number" step="0.01" name="height" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Service :</label>
            <input type="text" name="service" class="form-control">
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label>Status :</label>
            <input type="text" name="status" class="form-control" value="Pending">
        </div>

        <!-- Tombol Submit -->
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<!-- Tambahkan Bootstrap CSS jika belum ada -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">