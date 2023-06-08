<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php' ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Category View</h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-7 pt-3">
                            <form class="">
                            <div class="input-group mb-4">
                            <input type="text" class="form-control"  placeholder="Category Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-primary" style="color: white;" type="button">Add Category</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <iframe src="factproduction.php" width="100%" height="400px"></iframe>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include 'addons.php' ?>
    <!-- script JS  -->
    <?php include 'script.php'; ?>
</body>

</html>