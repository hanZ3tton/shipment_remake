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
    .form-row textarea {
        flex: 1;
        padding: 10px 14px;
        border: 1px solid #d1d3e2;
        border-radius: 6px;
        font-size: 14px;
        background-color: #fff;
    }

    .form-row input:focus,
    .form-row textarea:focus {
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

    .image-preview {
        margin-top: 10px;
        max-width: 250px;
        border-radius: 8px;
        display: none;
    }
</style>

<div class="form-container">
    <h2>Form Inbound</h2>

    <form action="<?php echo site_url('InboundController/store'); ?>" method="post" enctype="multipart/form-data">

        <div class="section-title">
            <i class="fas fa-truck"></i> Informasi Inbound
        </div>

        <div class="form-row">
            <input type="text" name="inbound_shipper_name" placeholder="Nama Shipper" required>
            <input type="text" name="inbound_shipper_phone" placeholder="Nomor Telepon" required>
        </div>

        <div class="form-row">
            <input type="number" step="0.01" name="weight" placeholder="Berat" required>
            <textarea name="description" placeholder="Deskripsi Barang" required></textarea>
        </div>

        <div class="form-row">
            <input type="date" name="inbound_date" required>
        </div>

        <div class="form-row">
            <input type="file" name="inbound_photo" accept="image/*" onchange="previewImage(event)">
        </div>

        <img id="preview" class="image-preview" alt="Preview Gambar">

        <button type="submit" class="btn-submit">Simpan Data</button>
    </form>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>