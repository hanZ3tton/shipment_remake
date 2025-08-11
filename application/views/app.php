<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout/head', $title) ?>

<body>
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <?php $this->load->view($content) ?>
    <?php $this->load->view('layout/script') ?>

</body>

</html>