hola pandejo, aqui tienes el codigo que me pediste
<?php if ($this->session->flashdata('success')): ?>
    <script>
        alert("<?= $this->session->flashdata('success'); ?>");
    </script>
<?php endif; ?>