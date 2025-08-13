<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout/head') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('layout/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('layout/topbar') ?>

                <!-- Begin Page Content -->
                <?php $this->load->view($content) ?>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php // $this->load->view('layout/footer') 
            ?>



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <?php $this->load->view("layout/logout-modal") ?>

    <?php $this->load->view('layout/script') ?>

</body>