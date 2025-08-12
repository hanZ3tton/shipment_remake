<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

<div class="container mt-4">
    <h3>Daftar User</h3>
    <form action="<?= site_url('profile/delete') ?>" method="post" id="form-delete">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="<?= $u->id ?>"></td>
                        <td><?= $u->user_name ?></td>
                        <td><?= $u->full_name ?></td>
                        <td><?= $u->email ?></td>
                        <td><?= $u->phone_number ?></td>
                        <td><?= $u->city ?></td>
                        <td><?= $u->created_at ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div id="action-buttons" class="mt-3" style="display:none;">
            <button type="submit" class="btn btn-danger mr-2 animated fadeIn">
                <i class="fas fa-trash"></i> Delete
            </button>
            <a href="#" id="edit-btn" class="btn btn-warning animated fadeIn">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#select-all').click(function() {
        $('input[name="ids[]"]').prop('checked', this.checked);
        toggleButtons();
    });

    $('input[name="ids[]"]').change(function() {
        toggleButtons();
    });

    function toggleButtons() {
        if ($('input[name="ids[]"]:checked').length > 0) {
            $('#action-buttons').fadeIn();
        } else {
            $('#action-buttons').fadeOut();
        }
    }

    $('#edit-btn').click(function(e) {
        e.preventDefault();
        var selected = $('input[name="ids[]"]:checked');
        if (selected.length == 1) {
            var id = selected.val();
            window.location.href = "<?= site_url('profile/edit/') ?>" + id;
        } else {
            alert('Pilih satu data untuk diedit!');
        }
    });
</script>