<!-- application/views/component/shipment_inbound_form.php -->
<div class="container mt-4">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h4 class="mb-0 fw-bold">
                <i class="bi bi-box-seam me-2"></i> Form Pengiriman & Inbound
            </h4>
        </div>
        <div class="card-body p-4">

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
            <div class="tab-content mt-4" id="formTabsContent">
                <!-- Form Shipment -->
                <div class="tab-pane fade show active" id="shipment" role="tabpanel">
                    <form action="<?= base_url('shipments/save') ?>" method="post" class="needs-validation" novalidate>

                        <!-- Informasi Pengirim -->
                        <div class="mb-4">
                            <h5 class="text-primary fw-bold border-bottom pb-2">Informasi Pengirim</h5>
                            <div class="row g-3 mt-1">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Pengirim</label>
                                    <input type="text" name="shipper_name" class="form-control" placeholder="Nama Pengirim" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Telepon Pengirim</label>
                                    <input type="text" name="shipper_phone_number" class="form-control" placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Alamat Pengirim</label>
                                    <textarea name="shipper_address" class="form-control" rows="2" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Penerima -->
                        <div class="mb-4">
                            <h5 class="text-primary fw-bold border-bottom pb-2">Informasi Penerima</h5>
                            <div class="row g-3 mt-1">
                                <div class="col-md-4">
                                    <label class="form-label">Nama Penerima</label>
                                    <input type="text" name="receiver_name" class="form-control" placeholder="Nama Penerima" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Telepon Penerima</label>
                                    <input type="text" name="receiver_phone_number" class="form-control" placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Nomor ARC / ID Penerima</label>
                                    <input type="text" name="receiver_arc_id" class="form-control" placeholder="Nomor ARC / ID">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Negara</label>
                                    <select name="receiver_state" class="form-select">
                                        <option value="">-- Pilih Negara --</option>
                                        <option value="United States">United States</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Kota</label>
                                    <input type="text" name="receiver_city" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="receiver_postal_code" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Alamat Penerima</label>
                                    <textarea name="receiver_address" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Barang -->
                        <div class="mb-4">
                            <h5 class="text-primary fw-bold border-bottom pb-2">Informasi Barang</h5>
                            <div class="row g-3 mt-1">
                                <div class="col-md-3">
                                    <label class="form-label">Kategori</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Panjang (cm)</label>
                                    <input type="number" step="0.01" name="length" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Lebar (cm)</label>
                                    <input type="number" step="0.01" name="width" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Tinggi (cm)</label>
                                    <input type="number" step="0.01" name="height" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Service</label>
                                    <input type="text" name="service" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <input type="text" name="status" class="form-control" value="Pending" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4 py-2">
                                💾 Simpan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Form Inbound -->
                <div class="tab-pane fade" id="inbound" role="tabpanel">
                    <form action="<?= base_url('inbound/save') ?>" method="post" enctype="multipart/form-data">
                        <h5>Informasi Inbound</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Nama Shipper :</label>
                                <input type="text" name="inbound_shipper_name" class="form-control" placeholder="Nama Shipper">
                            </div>
                            <div class="col-md-6">
                                <label>Telepon Shipper :</label>
                                <input type="text" name="inbound_shipper_phone" class="form-control" placeholder="08xxxxxxxxxx">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Berat (kg) :</label>
                                <input type="number" step="0.01" name="weight" class="form-control" placeholder="0.00">
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Inbound :</label>
                                <input type="date" name="inbound_date" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi :</label>
                            <textarea name="description" class="form-control" rows="2" placeholder="Deskripsi barang"></textarea>
                        </div>

                        <!-- Tambahan: Upload Foto -->
                        <div class="mb-3">
                            <label>Foto Barang :</label>
                            <input type="file" name="item_photo" class="form-control" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, atau JPEG. Max size 2MB.</small>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Simpan Inbound</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap CSS & Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>