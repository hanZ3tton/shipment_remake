<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/app/head'); ?>

<?php if (isset($view_style)) {
    $this->load->view($view_style);
} ?>

<body id="page-top">
    <?php
    // var_dump($this->_ci_cached_vars);
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('layouts/app/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('layouts/app/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php $this->load->view($view); ?>
                <!-- End of Begin Page Content -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('layouts/app/modal/nav_user_modal.php') ?>

    <!-- Global Script -->
    <?php $this->load->view('layouts/global_script'); ?>
    <!-- End of Global Script -->

    <!-- Custom Script -->
    <?php if (isset($view_script)) {
        $this->load->view($view_script);
    } ?>
    <!-- End of Custom Script -->


</body>

</html>