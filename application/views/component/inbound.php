<!-- application/views/component/shipment_inbound_form.php -->
<style>
    body {
        background: #f8f9fc;
        font-family: Arial, sans-serif;
    }

    .form-container {
        max-width: 900px;
        margin: 50px auto;
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .form-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: #3b5bdb;
        margin-bottom: 20px;
    }

    .section-title {
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 15px;
        color: #495057;
        border-left: 4px solid #3b5bdb;
        padding-left: 10px;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 10px;
        font-size: 0.95rem;
        border: 1px solid #ddd;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #3b5bdb;
        box-shadow: 0 0 0 0.2rem rgba(59, 91, 219, 0.25);
    }

    .btn-primary {
        background: #3b5bdb;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
    }

    .btn-primary:hover {
        background: #2c44a0;
    }
</style>

<div class="form-container">
    <div class="form-title">Form Pengiriman</div>

    <!-- Informasi Pengiriman -->
    <div class="section-title">Informasi Pengiriman</div>
    <div class="row mb-3">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nomor Resi">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nama Penerima">
        </div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" placeholder="Alamat"></textarea>
    </div>

    <!-- Informasi Inbound -->
    <div class="section-title">Informasi Inbound</div>
    <div class="row mb-3">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Nama Shipper">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Nomor Telepon">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Berat">
        </div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" placeholder="Deskripsi Barang"></textarea>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control">
    </div>
    <div class="mb-3">
        <input type="file" class="form-control">
    </div>

    <button class="btn btn-primary">Simpan</button>
</div>