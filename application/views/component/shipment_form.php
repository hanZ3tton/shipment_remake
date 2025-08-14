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
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .form-container h2 {
        font-size: 26px;
        color: #4e73df;
        margin-bottom: 25px;
        font-weight: bold;
    }

    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: #5a5c69;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .section-title i {
        margin-right: 8px;
        color: #858796;
    }

    .form-row {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }

    .form-row input,
    .form-row textarea,
    .form-row select {
        flex: 1;
        padding: 10px 14px;
        border: 1px solid #d1d3e2;
        border-radius: 6px;
        font-size: 14px;
        background-color: #fff;
    }

    .form-row input:focus,
    .form-row textarea:focus,
    .form-row select:focus {
        outline: none;
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    textarea {
        resize: none;
        min-height: 80px;
    }

    .btn-submit {
        background-color: #4e73df;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-submit:hover {
        background-color: #2e59d9;
    }

    .tab-content {
        margin-top: 20px;
    }

    .nav-tabs .nav-link.active {
        background-color: #4e73df;
        color: white;
        border-radius: 6px;
    }
</style>

<div class="form-container">
    <h2>Form Pengiriman & Inbound</h2>

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs nav-fill rounded-3 overflow-hidden" id="formTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fw-semibold" id="shipment-tab" data-bs-toggle="tab" data-bs-target="#shipment" type="button" role="tab">
                📦 Informasi Pengiriman
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-semibold" id="inbound-tab" data-bs-toggle="tab" data-bs-target="#inbound" type="button" role="tab">
                🚚 Informasi Inbound
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="formTabsContent">
        <!-- Form Shipment -->
        <div class="tab-pane fade show active" id="shipment" role="tabpanel">
            <form action="<?= base_url('shipments/save') ?>" method="post" class="needs-validation" novalidate>
                <!-- Informasi Pengirim -->
                <div class="section-title">
                    <i class="bi bi-person-fill"></i> Informasi Pengirim
                </div>
                <div class="form-row">
                    <input type="text" name="shipper_name" placeholder="Nama Pengirim" required>
                    <input type="text" name="shipper_phone_number" placeholder="Telepon Pengirim" required>
                </div>
                <div class="form-row">
                    <textarea name="shipper_address" placeholder="Alamat Pengirim" required></textarea>
                </div>

                <!-- Informasi Penerima -->
                <div class="section-title">
                    <i class="bi bi-people-fill"></i> Informasi Penerima
                </div>
                <div class="form-row">
                    <input type="text" name="receiver_name" placeholder="Nama Penerima" required>
                    <input type="text" name="receiver_phone_number" placeholder="Telepon Penerima" required>
                </div>
                <div class="form-row">
                    <input type="text" name="receiver_arc_id" placeholder="Nomor ARC / ID Penerima">
                    <select name="receiver_state">
                        <option value="">-- Pilih Negara --</option>
                        <option value="United States">United States</option>
                        <option value="Afghanistan">Afghanistan</option>
                    </select>
                </div>
                <div class="form-row">
                    <input type="text" name="receiver_city" placeholder="Kota">
                    <input type="text" name="receiver_postal_code" placeholder="Kode Pos">
                </div>
                <div class="form-row">
                    <textarea name="receiver_address" placeholder="Alamat Penerima"></textarea>
                </div>

                <!-- Informasi Barang -->
                <div class="section-title">
                    <i class="bi bi-box-seam"></i> Informasi Barang
                </div>
                <div class="form-row">
                    <input type="text" name="category" placeholder="Kategori">
                    <input type="number" step="0.01" name="length" placeholder="Panjang (cm)">
                </div>
                <div class="form-row">
                    <input type="number" step="0.01" name="width" placeholder="Lebar (cm)">
                    <input type="number" step="0.01" name="height" placeholder="Tinggi (cm)">
                </div>
                <div class="form-row">
                    <input type="text" name="service" placeholder="Service">
                    <input type="text" name="status" value="Pending" readonly>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn-submit">Simpan</button>
                </div>
            </form>
        </div>

        <!-- Form Inbound -->
        <div class="section-title">
            <i class="fas fa-truck"></i> Informasi Inbound
        </div>

        <div class="form-row">
            <input type="text" name="inbound_shipper_name" placeholder="Nama Shipper" readonly>
            <input type="text" name="inbound_shipper_phone" placeholder="Nomor Telepon" readonly>
            <input type="number" name="weight" placeholder="Berat" readonly>
        </div>

        <div class="form-row">
            <textarea name="description" placeholder="Deskripsi Barang" readonly></textarea>
        </div>

        <div class="form-row">
            <input type="text" name="inbound_date" placeholder="Tanggal Inbound"
                onfocus="(this.type='date')"
                onblur="if(!this.value) this.type='text'"
                readonly>
        </div>

        <div class="form-row">
            <input type="file" name="inbound_photo" accept="image/*" disabled>
        </div>

        <div class="form-row">
            <img id="previewImage" src="#" alt="Preview Foto" style="max-width: 300px; display: none;">
        </div>

        <script>
            const itemPhotoInput = document.getElementById('item_photo');
            const photoPreview = document.getElementById('photo_preview');

            itemPhotoInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.src = '';
                    photoPreview.style.display = 'none';
                }
            });
        </script>
    </div>
</div>

<!-- Bootstrap CSS & Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>